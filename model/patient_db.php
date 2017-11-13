<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function addPatient($first_name,$last_name,$birth_date,$gender, $total_calories, $volume_restriction, $dietician_id, $caregiver_id){
    global $db;
    $sql = "INSERT INTO `patient`(`first_name`, `last_name`, `birth_date`, `gender`,`total_calories`, `volume_restriction`,`dietician_id`,`caregiver_id`) VALUES "
            . " (:first_name, :last_name, :birth_date, :gender, :total_calories, :volume_restriction, :dietician_id, :caregiver_id)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':first_name',$first_name);
    $statement->bindValue(':last_name',$last_name);
    $statement->bindValue(':birth_date',$birth_date);
    $statement->bindValue(':gender',$gender);
    $statement->bindValue(':total_calories',$total_calories);
    $statement->bindValue(':volume_restriction',$volume_restriction);
    $statement->bindValue(':dietician_id',$dietician_id);
    $statement->bindValue(':caregiver_id',$caregiver_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}


function getCaregiver() {
    global $db;
    $query='SELECT * FROM `caregiver`';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}

function getDietician() {
    global $db;
    $query='SELECT * FROM `dietician`';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $result;
}
function getPatient(){
    global $db;
    $query='SELECT patient.first_name, patient.last_name, birth_date, patient.gender, dietician.first_name, dietician.last_name, caregiver.first_name, caregiver.last_name FROM patient, caregiver, dietician';
    $statement=$db->prepare($query);
    $statement->execute();
    $result=$statement->fetchAll(PDO::FETCH_ASSOC);
    $result=sort($result);
    $statement->closeCursor();
    
    return $result;
}
