<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {   
        $data=[
            'title'=>'home|webagungdumadi'
        ];
<<<<<<< HEAD
        echo view('pages/Home',$data);
    
=======
       
        echo view('pages/Home', $data);
   
>>>>>>> 7a3d5e6f078549e5b07b22714f93ca93622f45c5
    }
    public function about(){
        $data=[
            'title'=>'about'
        ];
        echo view('pages/about',$data);

    }
<<<<<<< HEAD
    
=======

>>>>>>> 7a3d5e6f078549e5b07b22714f93ca93622f45c5
}