<?php
namespace App\Controllers;

class Payment extends BaseController {
    public function index() {
        $total = $this->request->getPost('total');

        // Debug log untuk memastikan total dikirim dengan benar
        log_message('debug', 'Total amount received: ' . $total);

        \Midtrans\Config::$serverKey = 'SB-Mid-server-n8SyKIhlOo3_mI5sd3I3kO2T';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Pastikan total adalah angka dan lebih besar dari 0
        $total_price = (float) $total;
        if ($total_price <= 0) {
            throw new \Exception('Invalid total amount: ' . $total_price);
        }

        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $total_price,
            ]
        ];

        // Debug log untuk memastikan parameter transaksi benar
        log_message('debug', 'Transaction Params: ' . json_encode($params));

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        } catch (Exception $e) {
            log_message('error', 'Midtrans Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Payment processing failed. Please try again.');
        }

        $data = [
            'snapToken' => $snapToken
        ];

        return view('payment/pay', $data);
    }
}
