<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function addRecipe($desired_cal_cat1, $desired_cal_cat2, $desired_cal_cat3, $desired_cal_cat4, $desired_cal_cat5){
    
}

function getCalories(){
        global $db;
    $query='SELECT patient.first_name, patient.last_name, patient_id, category_name, recipe_category.category_id, desired_calories FROM `recipe_category`, category, patient where recipe_id=patient_id and category.category_id=recipe_category.category_id';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category1(){
    $query='SELECT * FROM `ingredient` where category_id=1';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category2(){
    $query='SELECT * FROM `ingredient` where category_id=2';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}


function getIngredient_category3(){
    $query='SELECT * FROM `ingredient` where category_id=3';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category4(){
    $query='SELECT * FROM `ingredient` where category_id=4';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category5(){
    $query='SELECT * FROM `ingredient` where category_id=5';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category6(){
    $query='SELECT * FROM `ingredient` where category_id=6';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category7(){
    $query='SELECT * FROM `ingredient` where category_id=7';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category8(){
    $query='SELECT * FROM `ingredient` where category_id=8';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category9(){
    $query='SELECT * FROM `ingredient` where category_id=9';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getIngredient_category10(){
    $query='SELECT * FROM `ingredient` where category_id=10';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}