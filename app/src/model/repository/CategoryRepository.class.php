<?php
abstract class CategoryRepository extends Database{
    public static function GetAllCategories(){
       $statement = parent::connect()->prepare("SELECT * FROM category");
       $statement->execute();
       $data = $statement->fetchAll();

       return $data;
    }
} 