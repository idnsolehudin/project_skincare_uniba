<?php 
namespace App\Controllers;

use App\Models\InsertDetailModel;
use App\models\InsertProdukModel;

class TambahProduk extends BaseController {
    public function update() {
        $produk = new InsertProdukModel();
        $detail = new InsertDetailModel(); 

        function produkId() {

             $timestamp = time();
             $second = date("s", $timestamp);
            
             return $second;
        }
       
        $id = produkId();

        $nm_produk = $this->request->getVar("nama");
        $slug = str_replace(' ','-',$nm_produk);

        $dataProduk = [
            'id' => $this->request->getVar("id_produk"),
            'category_id' => $this->request->getVar("kategori"),
            'product_name' => $this->request->getVar("nama")
        ];

        $dataDetail = [
            'id' => $this->request->getVar("id"),
            'id_product' => $this->request->getVar("id_produk"),
            'variant' => $this->request->getVar("varian"),
            'slug' => $slug,
            'stock' => $this->request->getVar("stok"),
            'price' => $this->request->getVar("harga"),
            'description' => $this->request->getVar("deskripsi")
        ];

        $produk->save($dataProduk);
        $detail->save($dataDetail);

        return redirect()->to('/dashboard/produk');
    }


    public function submit() {
        $produk = new InsertProdukModel();
        $detail = new InsertDetailModel(); 

        function produk() {

             $timestamp = time();
             $second = date("s", $timestamp);
            
             return $second;
        }
       
        $id = produk();

        $nm_produk = $this->request->getVar("nama");
        $slug = str_replace(' ','-',$nm_produk);

        $dataProduk = [
            'id' => $this->request->getVar("kategori") . $id,
            'category_id' => $this->request->getVar("kategori"),
            'product_name' => $this->request->getVar("nama")
        ];

        $dataDetail = [
            'id' => $dataProduk['id'] . $id,
            'id_product' => $dataProduk['id'],
            'variant' => $this->request->getVar("varian"),
            'slug' => $slug,
            'stock' => $this->request->getVar("stok"),
            'price' => $this->request->getVar("harga"),
            'description' => $this->request->getVar("deskripsi")
        ];

        $produk->insert($dataProduk);
        $detail->insert($dataDetail);

        session()->setFlashdata("pesan", "Data Berhasil DIperbarui..");
        return redirect()->to('/dashboard/produk');
        
    }
}