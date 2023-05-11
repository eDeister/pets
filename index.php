<?php
//Set errors to display
ini_set('display_errors',1);
error_reporting(E_ALL);

//Get autoload so a fat-free object can be created
require_once('vendor/autoload.php');

//Create new fat-free object
$f3 = Base :: instance();

//Define default route
$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view -> render('views/home.html');
});

//Run the fat-free object
$f3 -> run();