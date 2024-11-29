<?php


require_once 'AppController.php';

class SecurityController extends Appcontroller{

    public function login(){

        $method =$_SERVER['REQUEST_METHOD'];
        if($this->isGet()){
            return $this->render("login");
        }
        

        $email = $_POST['eMail'];
        $password = $_POST['password'];

        $this->render("dashboard",
        ['name' =>"XYZ",
        'email' =>$email,
        'password' =>$password
        ]);

    }
    public function register(){

        $method =$_SERVER['REQUEST_METHOD'];
        if($this->isGet()){
            return $this->render("register");
        }


        $email = $_POST['eMail'];
        $password = $_POST['password'];

        $this->render("dashboard",
            ['name' =>"XYZ",
                'email' =>$email,
                'password' =>$password
            ]);

    }

}