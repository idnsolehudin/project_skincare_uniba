<?php

namespace App\Controllers;

<<<<<<< HEAD
class auth extends BaseController
{
    public function login()
    {
        $data=[
            'title'=>'login',
            'favicon'=>'/assets/images/msglow_large.png'
=======
class login extends BaseController
{
    public function login(){
        $data=[
            'title'=>'login'
>>>>>>> 7a3d5e6f078549e5b07b22714f93ca93622f45c5
        ];
        echo view('auth/login',$data);
    }

<<<<<<< HEAD
    public function registrasi()
    {
        $data=[
            'title'=>'registrasi',
            'favicon'=>'/assets/images/msglow_large.png'
        ];
        return view('auth/register',$data); 
    }


=======
    public function registrasi(){
        $data=[
            'title'=>'registrasi'
        ];
        return view('auth/registrasi');
    }

    
>>>>>>> 7a3d5e6f078549e5b07b22714f93ca93622f45c5

}
