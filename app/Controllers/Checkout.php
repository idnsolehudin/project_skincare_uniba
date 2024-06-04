<?php 
namespace App\Controllers;

use App\Models\InsertCheckout;

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

    // public function update($id) {
    //     $produk = new InsertProdukModel();
    //     $detail = new InsertDetailModel(); 

    //     $db = \Config\Database::connect();
    //     $db->transStart();


    //     // function produkId() {

    //     //      $timestamp = time();
    //     //      $second = date("s", $timestamp);
            
    //     //      return $second;
    //     // }
       
    //     // $id = produkId();

    //     $nm_produk = $this->request->getVar("nama");
    //     $slug = str_replace(' ','-',$nm_produk);
        
    //     $id_detail = $this->request->getVar("id");

    //     $dataDetail = [
    //         'id' => $this->request->getVar("id"),
    //         'id_product' => $this->request->getVar("id_produk"),
    //         'variant' => $this->request->getVar("varian"),
    //         'slug' => $slug,
    //         'rating' => $this->request->getVar("rating"),
    //         'stock' => $this->request->getVar("stok"),
    //         'price' => $this->request->getVar("harga"),
    //         'description' => $this->request->getVar("deskripsi"),
    //         'discount' => $this->request->getVar("potongan"),
    //         'discount_name' => $this->request->getVar("promo")
    //     ];



    //     $id_produk = $this->request->getVar("id_produk");

    //     $dataProduk = [
    //         'id' => $this->request->getVar("id_produk"),
    //         'category_id' => $this->request->getVar("kategori"),
    //         'product_name' => $this->request->getVar("nama")
    //     ];

    //     $produk->update($id_produk, $dataProduk);

    //     $detail->where('id_product', $id)->set($dataDetail)->update();
       
    //     $db->transComplete();

    //     session()->setFlashdata("pesan", "Data Berhasil Diperbarui..");
    //     return redirect()->to('/dashboard/produk');
    // }


    // public function submit() {
    //     $produk = new InsertProdukModel();
    //     $detail = new InsertDetailModel(); 

    //     function produk() {

    //          $timestamp = time();
    //          $second = date("s", $timestamp);
            
    //          return $second;
    //     }
       
    //     $id = produk();

    //     $nm_produk = $this->request->getVar("nama");
    //     $slug = str_replace(' ','-',$nm_produk);

    //     $dataProduk = [
    //         'id' => $this->request->getVar("kategori") . $id,
    //         'category_id' => $this->request->getVar("kategori"),
    //         'product_name' => $this->request->getVar("nama")
    //     ];

    //     //mengambil file image
    //     $fileImage = $this->request->getFile('image');

    //     //apakah tidak ada gambar yang diupload 
    //     if ($fileImage->getError() == 4) {
    //         //mengambil gambar default
    //         $namaImage = 'picture_icon.jpeg';
    //     } else {

    //         //ambil nama file gambar dan menjadikan nama random
    //         $namaImage = $fileImage->getRandomName();
    
    //         //memindahkan file ke folder image produk
    //         $fileImage->move('assets/produk',$namaImage);
    //     }


     

    //     $dataDetail = [
    //         'id' => $dataProduk['id'] . $id,
    //         'id_product' => $dataProduk['id'],
    //         'variant' => $this->request->getVar("varian"),
    //         'slug' => $slug,
    //         'stock' => $this->request->getVar("stok"),
    //         'price' => $this->request->getVar("harga"),
    //         'image' => $namaImage,
    //         'description' => $this->request->getVar("deskripsi")
    //     ];

    //     $produk->insert($dataProduk);
    //     $detail->insert($dataDetail);

    //     session()->setFlashdata("pesan", "Data Berhasil Ditambahkan..");
    //     return redirect()->to('/dashboard/produk');
        
    // }
}