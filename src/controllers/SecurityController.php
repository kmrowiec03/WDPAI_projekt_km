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

        $this->render("login",
        ['name' =>"XYZ",
        'email' =>$email,
        'password' =>$password
        ]);

    }

}