<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addIngredient($ingredient_name,$serving_unit,$calories_per_serving,$category_id){
    global $db;
    $sql = "INSERT INTO `ingredient`(`ingredient_name`, `serving_unit`, `calories_per_serving`, `category_id`) VALUES "
            . "(:ingredient_name, :serving_unit, :calories_per_serving, :category_id)";
   
    $statement = $db->prepare($sql);
    $statement->bindValue(':ingredient_name',$ingredient_name);
    $statement->bindValue(':serving_unit',$serving_unit);
    $statement->bindValue(':calories_per_serving',$calories_per_serving);
    $statement->bindValue(':category_id',$category_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}


function getCategory(){
    global $db;
    $query='SELECT * FROM category';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $result=sort($result);
    $statement->closeCursor();
    
    return $result;
}


function getIngredient(){
    global $db;
    $query='select ingredient_id, ingredient_name, serving_unit, calories_per_serving, category_name from ingredient, category where ingredient.category_id=category.category_id
';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $result=sort($result);
    $statement->closeCursor();
    
    return $result;
}