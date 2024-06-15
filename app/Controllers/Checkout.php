<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\InsertCheckout;
use CodeIgniter\HTTP\RequestInterface;

class Checkout extends BaseController {

    public function tambah() {
        $produk = new InsertCheckout();
        $db = \Config\Database::connect();

        function produk() {
            $timestamp = time();
            $second = date("s", $timestamp);
            return $second;
        }
       
        $id = produk();
        $harga_total = $this->request->getVar("price") * $this->request->getVar("qty");

        $dataProduk = [
            'id' => $this->request->getVar("id_product") . $id,
            'id_product' => $this->request->getVar("id_product"),
            'id_user' => $this->request->getVar("id_user"),
            'qty' => $this->request->getVar("qty"),
            'price_total' => $harga_total
        ];

        $produk->insert($dataProduk);

        return redirect()->to("/");
    }

    public function invoice() {
        $price = $this->request->getVar("price");
        $qty = $this->request->getVar("qty");
        $harga = $price * $qty;
        $ppn = 0.11 * $harga;

        $data = [
            "title" => "Checkout",
            "order" => [
                "id_produk" => $this->request->getVar("id_product"),
                "nama_produk" => $this->request->getVar("nama_produk"),
                "category" => $this->request->getVar("category"),
                "variant" => $this->request->getVar("variant"),
                "desc" => $this->request->getVar("desc"),
                "price" => $price,
                "discount" => $this->request->getVar("discount"),
                "qty" => $qty,
            ],
            "harga" => $harga,
            "ppn" => $ppn,
        ];

        return view('order/invoice', $data);
    }

    // Other methods...
}
