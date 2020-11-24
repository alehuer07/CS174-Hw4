<?php
namespace butterfly_guard\hw4\views;

require(ROOT . "Hw4/src/views/View.php");

use butterfly_guard\hw4\views\View;

class LandingView extends View{
    function render($data){
        ?>
<!DOCTYPE html>
<html>

<head>
    <title>Community Jigsaw</title>
</head>

<body>
    <div class="container" style="margin:auto;">
        <div class="imageUpload">
            <form style="float:left;">
                <label for="fname">New Image:</label>
                <input type="text" id="newImage" name="newImage">
                <input type="submit" value="Upload">

            </form>
        </div>
        <div class="grid">
            <div id="piece1"></div>
            <div id="piece2"></div>
            <div id="piece3"></div>
            <div id="piece4"></div>
            <div id="piece5"></div>
            <div id="piece6"></div>
            <div id="piece7"></div>
            <div id="piece8"></div>
            <div id="piece9"></div>
        </div>
    </div>
</body>

</html><?php
    }
}