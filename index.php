<?php
define("ROOT", "c:/wamp64/www/");
// namespace butterfly_guard\hw3;
use butterfly_guard\hw4\controllers\LandingController;
// use butterfly_guard\hw3\controllers\LandingController;
//*1 Handle redirects here



//*2 Handle controller/activity selection
// Determine which activity to perform and call it
$controllerType = (isset($_REQUEST['c']) && in_array($_REQUEST['c'], [
    "landing"])) ? $_REQUEST['c'] . "controller" : "landingController";

// Require the file
require("./src/controllers/" . $controllerType . ".php");
$controllerType();


// Instantiates Controllers
function landingController(){
    // echo "Landing";
    $controller = new LandingController();
    $controller->start();
}
// function genreController(){
//     // echo "Genre";
//     $controller = new GenreController();
//     $controller->start();
// }
// function reviewController(){
//     echo "Review";
//     $controller = new ReviewController();
//     $controller->start();
// }
// function addGenreController(){
//     echo "addGenre";
//     $controller = new addGenreController();
//     $controller->start();
// }
// function addReviewController(){
//     echo "addReview";
//     $controller = new addReviewController();
//     $controller->start();
// }