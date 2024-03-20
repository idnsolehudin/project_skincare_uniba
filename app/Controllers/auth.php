<?php

namespace App\Controllers;


class auth extends BaseController
{
    public function login()
    {
        $data=[
            'title'=>'login',
            'favicon'=>'/assets/images/msglow_large.png'

        ];
        echo view('auth/login',$data);
    }


    public function registrasi()
    {
        $data=[
            'title'=>'registrasi',
            'favicon'=>'/assets/images/msglow_large.png'
        ];
        return view('auth/register',$data); 
    }


}
