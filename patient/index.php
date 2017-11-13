<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../common/configuration.php';
include '../model/database.php';
include '../model/patient_db.php';




session_start();

// get default values
    $message = "";
    $first_name = filter_input(INPUT_POST,'first_name');
    $last_name = filter_input(INPUT_POST,'last_name');
    $birth_date = filter_input(INPUT_POST,'birth_date');
    $gender = filter_input(INPUT_POST,'gender');
    $total_calories= filter_input(INPUT_POST,'total_calories');
    $volume_restriction=filter_input(INPUT_POST,'volume_restriction');
    $dietician_id= filter_input(INPUT_POST,'dietician_id');
    $caregiver_id= filter_input(INPUT_POST,'caregiver_id');
// if the list token was not provided, go back to the landing page

// if the logout button was clicked....

if (  (isset($_POST['submit'])) && isset($_SESSION['LOGGED_IN'])) {

    if (empty($first_name)  || empty($last_name) || empty($birth_date) || empty($gender) || empty($total_calories) ||empty($volume_restriction) || empty($caregiver_id) || empty($dietician_id)) {
      $message = "* One or more required fields are missing.";
        include 'patient_add.php';
        exit();
    } else{
        $success = addPatient($first_name,$last_name,$birth_date,$gender, $total_calories, $volume_restriction, $dietician_id, $caregiver_id);
        if ($success === true)
            {
            $message='Patient successfully added';
            include 'patient_add.php';
            exit();
            }else {
            $message = "An unexpected error occurred.";
            include 'patient_add.php';
            }
        
    
         }
}
            

if (isset($_SESSION['LOGGED_IN'])){
        include 'patient_add.php';
    exit();
}