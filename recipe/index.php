
<?php include '../common/configuration.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/recipe_db.php";
include '../model/patient_db.php';




session_start();

// get default values
    $message = "";
    $patient_id = filter_input(INPUT_POST,'patient_id');
    $liquid = filter_input(INPUT_POST,'liquid');
    $protein = filter_input(INPUT_POST,'protein');
    $vitamin_A = filter_input(INPUT_POST,'vitamin_A');
    $vitamin_C= filter_input(INPUT_POST,'vitamin_C');
    $fv_other=filter_input(INPUT_POST,'fv_other');
    $potassium= filter_input(INPUT_POST,'potassium');
    $starches= filter_input(INPUT_POST,'starches');
    $fat= filter_input(INPUT_POST,'fat');
    $supplement_needs= filter_input(INPUT_POST,'supplement_needs');
    $other_additions= filter_input(INPUT_POST,'other_additions');

// if the list token was not provided, go back to the landing page

// if the logout button was clicked....
$r=$patient_id.' '.$liquid.' '.$protein.' '.$vitamin_A.' '.$vitamin_C.' '.$fv_other.' '.$potassium.' '.$starches.' '.$fat.' '. $supplement_needs.' '.$other_additions;
echo $r;
if (  (isset($_POST['submit'])) && isset($_SESSION['LOGGED_IN'])) {

    if (empty($patient_id)  || empty($liquid) || empty($protein) || empty($vitamin_A) || empty($vitamin_C) ||empty($fv_other) || empty($potassium) || empty($starches) || empty($fat) || empty($supplement_needs) ||empty($other_additions)) {
      $message = "* One or more required fields are missing.".$r;
        include 'recipe_add.php';
        exit();
    } else{
        $success = addRecipe($patient_id,$liquid,$protein,$vitamin_A,$vitamin_C,$fv_other, $potassium, $starches, $fat, $supplement_needs, $other_additions);
        if ($success === true)
            {
            $message='Recipe successfully added';
            include 'recipe_add.php';
            exit();
            }else {
            $message = "An unexpected error occurred.";
            include 'recipe_add.php';
            }
        
    
         }
}
            

if (isset($_SESSION['LOGGED_IN'])){
        include 'recipe_add.php';
    exit();
}