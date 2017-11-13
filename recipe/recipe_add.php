<?php

?>
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
   
<h1 id="profile_title">Add New Recipe</h1>

<form action="index.php" method='post'>
            <label for='patient_id'>Patient:</label>
         <select name="patient_id">
          
        <option value=''>Select Patient </option>
        <?php 
        $patients= getPatient1();
        print_r($patients);
        foreach ($patients as $patient){
           echo "<option value=".$patient['patient_id'].">".$patient['first_name'].' '.$patient['last_name'].'</option>';
       }
         ?>
         </select> 
            <br>
            <br>
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
            
            <label for='fv_other'>F&V: Other:</label><br>
            <input type="number" name="fv_other" id='fv_other'><br>
            
            <label for='potassium'>F&V: Potassium:</label><br>
            <input type="number" name="potassium" id='potassium'><br>
            
            <label for='Starches'>Starches:</label><br>
            <input type="number" name="starches" id='Starches'><br>
            
            <label for='fat'>Fat:</label><br>
            <input type="number" name="fat" id='fat'><br>
            
            <label for='supplement_needs'>Supplement Needs:</label><br>
            <input type="number" name="supplement_needs" id='supplement_needs'><br><br>
            
            <label for='other_additions'>Other Additions:</label><br>
            <input type="number" name="other_additions" id='other_additions'><br><br>            
            <label>&nbsp;</label>
            <input type="submit" value="Add Recipe" name='submit'><br>
    </form>
      
    <div id='message'>
        <?php 
        echo $message;
        ?>
    </div>
</body>
</html>