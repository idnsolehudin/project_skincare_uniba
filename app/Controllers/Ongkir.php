<?php

namespace App\Controllers;

use App\Models\InsertCheckout;  
use App\Services\RajaOngkirService;
use CodeIgniter\Controller;

class Ongkir extends Controller
{
    protected $rajaOngkirService;

    public function __construct()
    {
        $this->rajaOngkirService = new RajaOngkirService();
    }

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

        $data = [
            "title" => "Checkout",
            "order" => [
                "id_produk" =>  $this->request->getVar("id_Produk"),
                "nama_produk" => $this->request->getVar("nama_produk"),
                "category" => $this->request->getVar("category"),
                "variant" => $this->request->getVar("variant"),
                "desc" => $this->request->getVar("desc"),
                "price" => $this->request->getVar("price"),
                "discount" => $this->request->getVar("discount"),
                "qty" => $this->request->getVar("qty"),
            ]
        ];

        return view('order/invoice', $data);
    }

    public function index()
    {
        return view('ongkir_form');
    }

    public function getProvinces()
    {
        $provinces = $this->rajaOngkirService->getProvinces();
        return $this->response->setJSON($provinces);
    }

    public function getCities($provinceId)
    {
        $cities = $this->rajaOngkirService->getCities($provinceId);
        return $this->response->setJSON($cities);
    }

    public function checkOngkir()
    {
        $origin = $this->request->getPost('origin');
        $destination = $this->request->getPost('destination');
        $weight = $this->request->getPost('weight');
        $courier = $this->request->getPost('courier');

        $result = $this->rajaOngkirService->getOngkir($origin, $destination, $weight, $courier);
        return $this->response->setJSON($result);
    }
}
