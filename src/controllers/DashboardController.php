<?php

require_once 'AppController.php';

class DashboardController extends AppController {


    public function __construct() {
        parent::__construct();
    }

    public function dashboard() {

        $this->render("dashboard");
    }
}