
<?php include '../common/configuration.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/people_db.php"; ?>
<?php
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

//if all else fails
include 'people_login.php';
exit();
?>
