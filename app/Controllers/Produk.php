<?php 
namespace App\Controllers;

// use App\Models\ProdukModelView;
use App\Models\ProdukModel;

class Produk extends BaseController 
{

    protected $produkModel;

    public function __construct()
    {
    //  $this->produkModel = new ProdukModelView();   
     $this->produkModel = new ProdukModel();   
    }
    // public function index() {
        

    //     $data = [
    //         'title' => 'List Produk',
    //         'subtitle' => "LIST PRODUK",
    //         // 'produk' => $this->produkModel->getProduk()
    //         'produk' => $this->produkModel->joinData()
    //     ];

    // return view('produk/index', $data);
    // }

    // public function detail($id) {
    //     $data = [
    //         'title' => 'Produk Detail',
    //         'subtitle' => "LIST PRODUK",
    //         // 'produk' => $this->produkModel->getProduk($id)
    //         'produk' => $this->produkModel->getData($id)
    //     ];
    // return view('produk/detail', $data);
    // }

    public function tambahKategori() {
        function getId() {
            $timestamp = time();

            $date = date("d", $timestamp);
            $month = date("m", $timestamp);
            $second = date("s", $timestamp);

            return $date . $month . $second;
        }

        $id = getId();

       
            $this->produkModel->saveKategori([
                'id' => $id,
                'category_name' => $this->request->getVar('ktg_produk')
            ]);

    

        session()->setFlashdata('pesan', 'kategori berhasil ditambahkan.....');
        return redirect()->to('/dashboard/produk');
    }
}

?>