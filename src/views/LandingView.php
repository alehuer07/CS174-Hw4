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
    <title>Move Reviews</title>
</head>

<body>
    <div>
        <div>
            <h1 style="font-size:20pt;"><a href=".">Movie Reviews</a></h1>
            <div>
                <h2>Genres</h2>
                <ul>
                    <li><b>[<a href=".">New Genre</a>]</b></li>
                    <li><b><a href=".">Action</a></b></li>
                    <li><b><a href=".">Comedy</a></b></li>
                    <li><b><a href=".">Drama</a></b></li>
                    <li><b><a href=".">Horror</a></b></li>
                    <li><b><a href=".">Musical</a></b></li>
                    <li><b><a href=".">Romance</a> [<a href=".">-</a>]</b></li>
                </ul>
            </div>
            <div style="height:1in;">
                <h2 style="margin-bottom:1px;padding-bottom:1px;">Reviews</h2>
                <ul style="margin:1px;padding:1px;">
                    <li><a href=".">Sonic Lives!!</a> 2020-10-13</li>
                    <li><a href=".">What's Tenet spelt backwards?</a> 2020-10-11</li>
                    <li><a href=".">Don't have a First Cow</a> 2020-10-08</li>
</body>

</html><?php
    }
}