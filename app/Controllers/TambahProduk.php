<?php 
namespace App\Controllers;

use App\Models\InsertDetailModel;
use App\models\InsertProdukModel;

class TambahProduk extends BaseController {


    public function update($id) {
        $produk = new InsertProdukModel();
        $detail = new InsertDetailModel(); 

        $db = \Config\Database::connect();
        $db->transStart();
        // function produkId() {

        //      $timestamp = time();
        //      $second = date("s", $timestamp);
            
        //      return $second;
        // }
       
        // $id = produkId();

        $nm_produk = $this->request->getVar("nama");
        $slug = str_replace(' ','-',$nm_produk);
        
        $id_detail = $this->request->getVar("id");

        $dataDetail = [
            'id' => $this->request->getVar("id"),
            'id_product' => $this->request->getVar("id_produk"),
            'variant' => $this->request->getVar("varian"),
            'slug' => $slug,
            'rating' => $this->request->getVar("rating"),
            'stock' => $this->request->getVar("stok"),
            'price' => $this->request->getVar("harga"),
            'description' => $this->request->getVar("deskripsi")
        ];



        $id_produk = $this->request->getVar("id_produk");

        $dataProduk = [
            'id' => $this->request->getVar("id_produk"),
            'category_id' => $this->request->getVar("kategori"),
            'product_name' => $this->request->getVar("nama")
        ];

        $produk->update($id_produk, $dataProduk);

        $detail->where('id_product', $id)->set($dataDetail)->update();
       
        $db->transComplete();

        session()->setFlashdata("pesan", "Data Berhasil Diperbarui..");
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

        //mengambil file image
        $fileImage = $this->request->getFile('image');

        //apakah tidak ada gambar yang diupload 
        if ($fileImage->getError() == 4) {
            //mengambil gambar default
            $namaImage = 'picture_icon.jpeg';
        } else {

            //ambil nama file gambar dan menjadikan nama random
            $namaImage = $fileImage->getRandomName();
    
            //memindahkan file ke folder image produk
            $fileImage->move('assets/produk',$namaImage);
        }


     

        $dataDetail = [
            'id' => $dataProduk['id'] . $id,
            'id_product' => $dataProduk['id'],
            'variant' => $this->request->getVar("varian"),
            'slug' => $slug,
            'stock' => $this->request->getVar("stok"),
            'price' => $this->request->getVar("harga"),
            'image' => $namaImage,
            'description' => $this->request->getVar("deskripsi")
        ];

        $produk->insert($dataProduk);
        $detail->insert($dataDetail);

        session()->setFlashdata("pesan", "Data Berhasil Ditambahkan..");
        return redirect()->to('/dashboard/produk');
        
    }
}