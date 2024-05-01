<?php  
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index() {
        $data = [
            'title' => 'DASHBOARD',
            'subtitle' => 'REPORT MONITORING'
        ];

        return view('user/dashboard', $data);
    }

    public function produk() {
        $data = [
            'title' => "DAFTAR PRODUK",
            'subtitle' => "LIST PRODUK"
        ];

        return view('produk/index', $data);
    }

    public function transaksi() {
        $data = [
            "title" => "Data Transaksi",
            "subtitle" => "List Data Transaksi"
        ];

        return view("transaksi/index", $data);
    }

    public function customer() {
        $data = [
            "title" => "Data Customer",
            "subtitle" => "List Data Customer"
        ];

        return view("customer/index", $data);
    }

    public function reseller() {
        $data = [
            "title" => "Data Reseller",
            "subtitle" => "List Data Reseller"
        ];

        return view("reseller/index", $data);
    }

    public function order() {
        $data = [
            "title" => "Data Order",
            "subtitle" => "List Data Order"
        ];

        return view("order/index", $data);
    }

    public function laporan() {
        $data = [
            "title" => "Data Laporan",
            "subtitle" => "Data Laporan"
        ];

        return view("laporan/index", $data);
    }

    public function keuangan() {
        $data = [
            "title" => "Laporan Keuangan",
            "subtitle" => "Data Laporan Keuangan"
        ];

        return view("keuangan/index", $data);
    }

    public function tambahProduk() {
        $data = [
            "title" => "Tambah Kategori Produk",
            "subtitle" => "TAMBAH KATEGORI PRODUK"
        ];

        return view("produk/tambah", $data);
    }
}
