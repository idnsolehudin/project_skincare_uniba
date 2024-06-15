<?php 
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\InsertCheckout;  
// use App\Services\RajaOngkirService;
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

    public function getProvinces()
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
            "key: 970a0d33227e4cb6db9d669a40b76c2f"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        $data = json_decode($response,true);

        // echo "<pre>"; 
        //   print_r($data); 
        // echo "</pre>";
        }

        return view('order/invoice', $data);
    }

    public function getCities()
    {
        $api_key = '6a4253274d8e7973c5e3bf87b36e591f';
        $province_id = $this->request->getGet('province_id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.rajaongkir.com/starter/city?province=' . $province_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'key: ' . $api_key
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }

    public function getDistricts()
    {
        $api_key = '6a4253274d8e7973c5e3bf87b36e591f';
        $city_id = $this->request->getGet('city_id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.rajaongkir.com/starter/subdistrict?city=' . $city_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'key: ' . $api_key
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }

    public function checkOngkir()
    {
        $api_key = 'YOUR_RAJAONGKIR_API_KEY';
        $origin = 'YOUR_ORIGIN_CITY_ID';
        $destination = $this->request->getGet('destination');
        $weight = $this->request->getGet('weight');
        $courier = 'jne';

        $params = [
            'origin' => $origin,
            'destination' => $destination,
            'weight' => $weight,
            'courier' => $courier
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.rajaongkir.com/starter/cost');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'key: ' . $api_key,
            'content-type: application/x-www-form-urlencoded'
        ]);
        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }
}