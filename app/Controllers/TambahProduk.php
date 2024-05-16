<?php 
namespace App\Controllers;

use App\Models\InsertDetailModel;
use App\models\InsertProdukModel;

class TambahProduk extends BaseController {
    public function submit() {
        $produk = new InsertProdukModel();
        $detail = new InsertDetailModel(); 

        function produkId() {

             $timestamp = time();
             $second = date("s", $timestamp);
            
             return $second;
        }
       
        $id = produkId();

        $dataProduk = [
            'id' => $this->request->getVar("kategori") . $id,
            'category_id' => $this->request->getVar("kategori"),
            'product_name' => $this->request->getVar("nama")
        ];

        $dataDetail = [
            'id' => $dataProduk['id'] . $id,
            'id_product' => $dataProduk['id'],
            'variant' => $this->request->getVar("varian"),
            'stock' => $this->request->getVar("stok"),
            'price' => $this->request->getVar("harga"),
            'description' => $this->request->getVar("deskripsi")
        ];

        $produk->insert($dataProduk);
        $detail->insert($dataDetail);

        return redirect()->to('/dashboard/produk');
    }
}