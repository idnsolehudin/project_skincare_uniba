<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {   
        $data=[
            'title'=>'home|webagungdumadi'
        ];
        echo view('layout/header',$data);
        echo view('pages/Home');
        echo view('layout/foother');
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

    public function registrasi()
    {
        $data=[
            'title'=>'registrasi'
        ];
        return view('auth/register',$data); 
    }


}