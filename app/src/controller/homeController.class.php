<?php
require_once("app/src/model/repository/CategoryRepository.class.php");

abstract class HomeController{
    public static function displayHome(){
        $categories = CategoryRepository::GetAllCategories();
        $view = "home";
        return [$view,$categories];
    }

    public static function displayLogin(){
        $view = "login";
        return $view;
    }
}