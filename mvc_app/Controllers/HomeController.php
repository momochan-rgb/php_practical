<?php
require_once ROOT_PATH.'Controllers/Controller.php';

class HomeController extends Controller
{
    public function index(){
        $this->view('home/index');
    }
}