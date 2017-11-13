<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../common/configuration.php';
include '../model/database.php';
include '../model/ingredient_db.php';

session_start();

// get default values
$message = "";
$ingredient_name = filter_input(INPUT_POST,'ingredient_name');
    $serving_unit = filter_input(INPUT_POST,'serving_unit');
    $calories_per_serving = filter_input(INPUT_POST,'calories_per_serving');
    $category_id= filter_input(INPUT_POST,'category_id');

        
// if the list token was not provided, go back to the landing page

// if the logout button was clicked....

if (  (isset($_POST['submit'])) && isset($_SESSION['LOGGED_IN'])) {
    
    if (empty($ingredient_name)  || empty($serving_unit) || empty($calories_per_serving) || empty($category_id)) {
        $message = "* One or more required fields are missing.";
        include 'ingredient_add.php';
        exit();
    } else{
//$ingredient_name,$serving_unit,$calories_per_serving,$category_id
        $success = addIngredient($ingredient_name,$serving_unit,$calories_per_serving,$category_id);
        if ($success === true)
            {
            $message='Ingredient successfully added';
            include 'ingredient_add.php';
            exit();
            }else {
            $message = "An unexpected error occurred.";
            include 'ingredient_add.php';
            }
        
    
         }
}
            

if (isset($_SESSION['LOGGED_IN'])){
        include 'ingredient_add.php';
    exit();
}
/*
$message = "";
if (isset($_POST['login']))
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $credentials = loginPeople($username,$password);
    $type=$credentials['type'];
    $people_id=$credentials['people_id'];
    if (!empty($people_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['TYPE']=$credentials['type'];
        $_SESSION['USERNAME'] = $username;
        header('Location: ../dashboard.html');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'people_login.php';
        exit();
    }
} 

/*
//teachers see the add form
if ($_SESSION['TYPE'] == 'teacher'){
    include 'request_add.php';
    exit();
}

(isset($_SESSION['LOGGED_IN'])) &&
//techs have the option to close requests.
$close_this_request_id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
if (($_SESSION['TYPE'] == 'tech') && (!empty($close_this_request_id))){
    closeRequest($close_this_request_id,$avtech_id);
    $requests = getRequests('In Progress');
    include 'request_list.php';
    exit();
}

//techs see the request list
if ($_SESSION['TYPE'] == 'tech'){
    $requests = getRequests('In Progress');
    include 'request_list.php';
    exit();
}
*/

?>
