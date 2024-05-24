<?php

namespace App\Controllers;

use App\Models\ModelBuilder;

class Pages extends BaseController
{
    protected $model_builder;

    function __construct()
    {
        $this->model_builder = new ModelBuilder();
    }

    public function index()
    {   
        
        $data=[
            'title'=>'Home|webskincare',
            'produk' => $this->model_builder->fullJoin()
        ];

        echo view('pages/Home',$data);
    
    }
    public function detail($slug)
    {   

        $data=[
            'title'=>'Home|webskincare',
            'produk' => $this->model_builder->getDetail($slug)
        ];

        return view('pages/home_detail',$data);
    
    }
    public function about(){
        $data=[
            'title'=>'about'
        ];
        echo view('pages/about',$data);

    }


}