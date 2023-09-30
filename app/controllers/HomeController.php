<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){
    header("location:" . URL_BASE . "cliente");
   } 
}
