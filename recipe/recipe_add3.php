<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>    
<body>

<?php
// Get the product data
$patient_id = filter_input(INPUT_POST, 'patient_id', FILTER_VALIDATE_INT);
// Validate inputs
if ($patient_id == null) {
    $error = "Invalid item data. Check all fields and try again.";
    //include('error.php');
} else {
    require_once('../model/database.php');
    // Add the product to the database  
    $query = 'INSERT INTO patient
                 (patient_id)
              VALUES
                 (:patient_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':patient_id', $patient_id);
    $statement->execute();
    $statement->closeCursor();
    
    include('index.php');
}
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$desired_calories = filter_input(INPUT_POST, 'desired_calories', FILTER_VALIDATE_INT);
// Validate inputs
if ($category_id == null) {
    $error = "Invalid item data. Check all fields and try again.";
    //include('error.php');
} else {
    require_once('../model/database.php');
    // Add the product to the database  
    $query = 'INSERT INTO recipe_category
                 (category_id, desired_calories)
              VALUES
                 (:category_id, :desired_calories)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':desired calories', $desired_calories);
    $statement->execute();
    $statement->closeCursor();
    
    include('index.php');
}
?>
<?php
include('../common/configuration.php');
require('../model/database.php');
$query = 'SELECT *
          FROM patient
          ORDER BY patient_id';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
    <h1>Patient:</h1>
<?php include '../model/patient_db.php';
$patients= getPatient();
 foreach ($patients as $patient) : ?>
    <option value="<?php echo $patient['patient_id']; ?>">
                   <?php echo $patient['last_name']; ?>
    </option>
 <?php endforeach; ?>
    
    <form action="">
            <label for='liquid'>Liquid:</label>
            <br>
            <input type="number" name="liquid" id='liquid'><br>
            <br>
            <label for='protein'>Protein:</label>
            <br>
            <input type="number" name="protein" id='protein'><br>
            <label for='vitamin_A'>F&V: Vitamin A:</label><br>
            <input type="number" name="vitamin_A" id='vitamin_A'><br>
            
            <label for='vitamin_C'>F&V: Vitamin C:</label><br>
            <input type="number" name="vitamin_C"><br>
            
            <label for='fv_other'>F&V: Other:</label>
            <input type="number" name="fv_other" id='fv_other'><br>
            
            <label for='potassium'>F&V: Potassium:</label>
            <input type="number" name="potassium" id='potassium'><br>
            
            <label for='Starches'>Starches:</label>
            <input type="number" name="Starches" id='Starches'><br>
            
            <label for='fat'>Fat:</label>
            <input type="number" name="Fat" id='fat'><br>
            
            <label for='supplement_needs'>Supplement Needs:</label>
            <input type="number" name="supplement_needs" id='supplement_needs'><br>
            <label>&nbsp;</label>
            <input type="submit" value="Add Recipe"><br>
    </form>
    
</body>
</html>