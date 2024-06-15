<?php

namespace App\Controllers;

use App\Models\InsertCheckout;  
use App\Services\RajaOngkirService;
use CodeIgniter\Controller;

class OngkirCopy extends Controller
{
    protected $rajaOngkirService;
    public $api_key = "970a0d33227e4cb6db9d669a40b76c2f";

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

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: ". $this->api_key,
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //dapatnya dalam bentuk json
            // kita konversi ke array dulu
            $array_response = json_decode($response, true);
            $dataprovinsi = $array_response["rajaongkir"]["results"];

            echo "<option value=''>--Pilih Provinsi--</option>";

            foreach ($dataprovinsi as $key => $tiap_provinsi) {
                echo "<option value='" . $tiap_provinsi["province_id"] . "' id_provinsi='" . $tiap_provinsi["province_id"] . "'>";
                echo $tiap_provinsi["province"];
                echo "</option>";
            }
        }
                return view('/order/checkout');
            }

    // public function getProvinces()
    // {
    //     $provinces = $this->rajaOngkirService->getProvinces();
    //     return $this->response->setJSON($provinces);
    // }

    // public function getCities($provinceId)
    // {
    //     $cities = $this->rajaOngkirService->getCities($provinceId);
    //     return $this->response->setJSON($cities);
    // }

    // public function checkOngkir()
    // {
    //     $origin = 501;
    //     $destination = $this->request->getPost('destination');
    //     $weight = $this->request->getPost('weight');
    //     $courier = $this->request->getPost('courier');

    //     $result = $this->rajaOngkirService->getOngkir($origin, $destination, $weight, $courier);
    //     return $this->response->setJSON($result);
    // }
}
