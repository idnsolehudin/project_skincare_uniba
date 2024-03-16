<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {   
        $data=[
            'title'=>'home|webagungdumadi'
        ];
       
        echo view('pages/Home', $data);
   
    }
    public function about(){
        $data=[
            'title'=>'about'
        ];
        echo view('layout/header',$data);
        echo view ('pages/about');
        echo view('layout/foother');
    }

    public function login(){
        $data=[
            'title'=>'about'
        ];
        echo view('auth/login',$data);
    }

    

}