<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>    
<body>
<style>

 label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​           
  
  fieldset {
     align: center;
     padding: 5px; 
     border: 1px solid rgb(128,128,128);
     width: 50%; 
  }
 
    
body {
    background-color: lightcyan;
    text-align: center;
}

h1 {
    color: black;
    text-align: center;
    font-family: Arial,sans-serif;
}
@media 
only screen and (max-width: 760px) {

	/* Force table to not be like tables anymore */
	form { 
		display: block;
                text-align: center;
	}
</style>

<?php
// Get the product data
$patient_id = filter_input(INPUT_POST, 'patient_id', FILTER_VALIDATE_INT);

// Validate inputs
if ($patient_id == null) {
    $error = "Invalid item data. Check all fields and try again.";
    //include('error.php');
} else {
    require_once('database.php');

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
    require_once('database.php');

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

include('configuration.php');

require('database.php');
$query = 'SELECT *
          FROM patient
          ORDER BY patient_id';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
    <h1>Patient:</h1>
    
 <?php foreach ($patients as $patient) : ?>
    <option value="<?php echo $patient['patient_id']; ?>">
                   <?php echo $patient['first_name']; ?>
    </option>
 <?php endforeach; ?>
    
    <form action="">
            <label>Liquid:</label>
            <input type="number" name="liquid"><br>

            <label>Protein:</label>
            <input type="number" name="protien"><br>

            <label>F&V: Vitamin A:</label>
            <input type="number" name="F&V: Vitamin A"><br>
            
            <label>F&V: Vitamin C:</label>
            <input type="number" name="F&V: Vitamin C"><br>
            
            <label>F&V: Other:</label>
            <input type="number" name="F&V: Other"><br>
            
            <label>F&V: Potassium:</label>
            <input type="number" name="F&V: Potassium"><br>
            
            <label>Starches:</label>
            <input type="number" name="Starches"><br>
            
            <label>Fat:</label>
            <input type="number" name="Fat"><br>
            
            <label>Supplement Needs:</label>
            <input type="number" name="Supplement Needs"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Recipe"><br>
    </form>
    
</body>
</html>
