<?php 
namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController 
{

    protected $produkModel;

    public function __construct()
    {
     $this->produkModel = new ProdukModel();   
    }
    public function index() {
        

        $data = [
            'title' => 'List Produk',
            // 'produk' => $this->produkModel->getProduk()
        ];

    return view('user/list_product', $data);
    }

    public function detail($id) {
        $data = [
            'title' => 'Produk Detail',
            'produk' => $this->produkModel->getProduk($id)
        ];
    return view('produk/detail', $data);
    }

    public function tambahKategori() {
        $this->produkModel->saveKategori([
            'id' => $this->request->getVar('id'),
            'category' => $this->request->getVar('kategori')
        ]);

        session()->setFlashdata('pesan', 'kategori berhasil ditambahkan.....');

    }
}

?>