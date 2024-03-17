<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {   
        $data=[
            'title'=>'home|webagungdumadi'
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