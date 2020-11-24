<?php
namespace butterfly_guard\hw4\models;

require(ROOT . "Hw4/src/models/Model.php");

use butterfly_guard\hw4\models\Model;

class Grid extends Model{

    function createGrid(){
        echo "createGenres";
    }
    
    function getGrid(){
        echo "getGrid";
    }

}