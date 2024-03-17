<?php

namespace App\Controllers;

class login extends BaseController
{
    public function login(){
        $data=[
            'title'=>'login'
        ];
        echo view('auth/login',$data);
    }

    public function registrasi(){
        $data=[
            'title'=>'registrasi'
        ];
        return view('auth/registrasi');
    }

    

}
