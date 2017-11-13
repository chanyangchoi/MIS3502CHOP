<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addRecipe($patient_id, $liquid,$protein,$vitamin_A,$vitamin_C,$fv_other, $potassium, $starches, $fat, $supplement_needs, $other_additions){
    global $db;
        $sql = "INSERT INTO `recipe`(`patient_id`, `liquid`,`protein`,`vitamin_A`, `vitamin_C`,`fv_other`,`potassium`,`starches`,`fat`,`supplements_needed`,`other_additions`) VALUES "
            . "(:patient_id, :liquid,:protein, :vitamin_A, :vitamin_C,:fv_other,:potassium,:starches,:fat,:supplement_needs,:other_additions)";
   
    $statement = $db->prepare($sql);
    $statement->bindValue(':patient_id',$patient_id);
    $statement->bindValue(':liquid',$liquid);
    $statement->bindValue(':protein',$protein);
    $statement->bindValue(':vitamin_A',$vitamin_A);
    $statement->bindValue(':vitamin_C',$vitamin_C);
    $statement->bindValue(':fv_other',$fv_other);
    $statement->bindValue(':potassium',$potassium);
    $statement->bindValue(':starches',$starches);
    $statement->bindValue(':fat',$fat);
    $statement->bindValue(':supplement_needs',$supplement_needs);
    $statement->bindValue('::other_additions',$other_additions);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
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

function getIngredient($category_id){
    global $db;
    $query='SELECT * FROM `ingredient` where category_id=:category_id';
    $statement=$db->prepare($query);
    $statement->bindValue(':category_id',$category_id);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}
