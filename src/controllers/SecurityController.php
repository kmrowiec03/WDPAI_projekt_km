<?php


require_once 'AppController.php';

class SecurityControler extends Appcontroller{

    public function login(){
        $this->render("login");
    }
}