<?php 

namespace App\Controllers;

// use App\Models\UserModel;

class User extends BaseController
{   
    // protected $userModel;
    // public function __construct() 
    // {
    //     $this->userModel = new UserModel();
    // }

    public function index() {
        // $user = $this->userModel->findAll();

        $data=[
            'title' => 'user'
            // 'user' => $this->userModel->getUser()

        ];


        return view('user/index', $data);
    }

    public function detail($id) {
        
        $data = [
            'title' => 'Detail User'
            // 'user' => $this->userModel->getUser($id)
        ];

        return view('user/detail');
    }


}

?>