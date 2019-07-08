<?php
require_once("app/src/model/repository/Database.class.php");
require_once("app/src/controller/HomeController.class.php");
session_start();


//ROUTER
if(!empty($_GET["action"])){
    $action = $_GET["action"];
}

if(empty($_GET["action"])){
    $action = "home";
}

if($action == "home"){
    $data= HomeController::displayHome();
    $view = $data[0];
    $categories = $data[1];
}

if($action == "login"){
    $view = "login";
}

require_once("app/public/template/base.html.php");