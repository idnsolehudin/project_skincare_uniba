<?php

namespace App\Controllers;

// use App\Models\InsertCheckout;  
// use App\Services\RajaOngkirService;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class AjaxOngkir extends Controller
{
    public function submitData()
    {
        // Mengambil data dari request

        $harga = $this->request->getVar('harga');

        // Lakukan logika atau kalkulasi yang diperlukan
        // Misalnya, Anda bisa melakukan query ke database atau kalkulasi lain di sini

        // Asumsikan kita hanya mengembalikan data yang diterima untuk contoh ini
        $data = [
            
            'harga' => $harga,
            
        ];

        // Mengembalikan data sebagai JSON
        return $this->response->setJSON($data, ResponseInterface::HTTP_OK);
    }
}