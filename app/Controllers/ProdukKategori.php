<?php 
namespace App\Controllers;

// use App\Models\ProdukModelView;
use App\Models\ModelBuilder;

class ProdukKategori extends BaseController 
{

    protected $produkModel;

    public function __construct()
    {
    //  $this->produkModel = new ProdukModelView();   
     $this->produkModel = new ModelBuilder();   
    }
    public function index() {
        

        $data = [
            'title' => 'List Produk',
            'subtitle' => "LIST PRODUK",
            // 'produk' => $this->produkModel->getProduk()
            'produk' => $this->produkModel->joinData()
        ];

    return view('produk/index', $data);
    }

    public function detail($slug) {

        $data = [
            'title' => "Detail Produk",
            'subtitle' => "DETAIL PRODUK",
            'detail_produk' => $this->produkModel->getDetail($slug)
        ];

        return view('produk/detail', $data);
    }

    // public function detail($id) {
    //     $data = [
    //         'title' => 'Produk Detail',  
    //         'subtitle' => "LIST PRODUK",
    //         // 'produk' => $this->produkModel->getProduk($id)
    //         'produk' => $this->produkModel->getData($id)
    //     ];
    // return view('produk/detail', $data);
    // }

    // public function tambahKategori() {
    //     function getId() {
    //         $timestamp = time();

    //         $date = date("d", $timestamp);
    //         $month = date("m", $timestamp);
    //         $second = date("s", $timestamp);

    //         return $date . $month . $second;
    //     }

    //     $id = getId();

    //     $this->produkModel->saveKategori([
    //         'id' => $id,
    //         'category_name' => $this->request->getVar('kategori')
    //     ]); 

    //     session()->setFlashdata('pesan', 'kategori berhasil ditambahkan.....');
    //     return redirect()->to('/dashboard/produk');
    // }
}

?>