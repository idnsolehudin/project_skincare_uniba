<?php

namespace App\Controllers;

use App\Models\ModelBuilder;

class Pages extends BaseController
{
    public function index()
    {   
        $produk = new ModelBuilder();
        $data=[
            'title'=>'home|webskincare',
            'produk' => $produk->joinData()
        ];

        echo view('pages/Home',$data);
    
    }
    public function about(){
        $data=[
            'title'=>'about'
        ];
        echo view('pages/about',$data);

    }


}