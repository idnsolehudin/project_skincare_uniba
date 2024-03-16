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
    public function login()
    {
        $data=[
            'title'=>'login'
        ];
        echo view('auth/login',$data);
    }

<<<<<<< HEAD
    
=======
    public function registrasi()
    {
        $data=[
            'title'=>'registrasi'
        ];
        return view('auth/register',$data); 
    }

>>>>>>> c1005f8bb40b9c176e37bd39efa9a7fc33422fb5

}