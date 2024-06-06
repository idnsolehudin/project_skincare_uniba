<?php
namespace App\Controllers;

class Payment extends BaseController{
    public function index(){



\Midtrans\Config::$serverKey = 'SB-Mid-server-n8SyKIhlOo3_mI5sd3I3kO2T';

\Midtrans\Config::$isProduction = false;

\Midtrans\Config::$isSanitized = true;

\Midtrans\Config::$is3ds = true;
$params = [
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
        )

       ];

$data = [ 
    'snapToken' => \Midtrans\Snap::getSnapToken($params)

];
return view('payment/pay',$data);
    }
}