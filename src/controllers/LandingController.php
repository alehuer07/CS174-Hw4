<?php
namespace butterfly_guard\hw4\controllers;
require("Controller.php");
require(ROOT . "Hw4/src/models/Grid.php");
require(ROOT . "Hw4/src/views/LandingView.php");


use butterfly_guard\hw4\controllers\Controller;
use butterfly_guard\hw4\models;
use butterfly_guard\hw4\views\LandingView;

class LandingController extends Controller{
    function start(){
        //Call Grid Methods
        
        // Pass data to the view
        $data = [];
        
        $view = new LandingView();
        $view->render($data);

        
    }
    
}