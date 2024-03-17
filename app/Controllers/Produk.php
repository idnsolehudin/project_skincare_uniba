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
            'produk' => $this->produkModel->getProduk()
        ];

    return view('produk/index', $data);
    }

    public function detail($id) {
        $data = [
            'title' => 'Produk Detail',
            'produk' => $this->produkModel->getProduk($id)
        ];
    return view('produk/detail', $data);
    }
}

?>