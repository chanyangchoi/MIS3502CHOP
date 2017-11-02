<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="addPatientProfile.css">
<link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
    
<style>

form  { display: table;}
p     { display: table-row;  }
label { display: table-cell; }
input { display: table-cell; }
</style>
<div class="row">
        <div class="col-xl-12 largeScreen">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="dashboard.html"><img src="logo.PNG"class="navBarImage"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  </ul>
                   <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patients
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="dashboard.html">Patient List</a>

                          <a class="dropdown-item" href="add_patient_profile.php">Add Patients</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recipe
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="add_recipe.php">Add Recipe</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingredient
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="add_ingredient.php">Add Ingredient</a>
                      </div>
                    </li>
                    
                    <!--<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li> -->
                  </ul>
                </div>
              </nav>
        </div>
    </div>
    <h1 id="profile_title">Add Patient Profile</h1>
    <form action="" class="addPatientForm">
        <fieldset>
        <label for="name"> Name:</label>
        <input type="text" name="name" id="name">
    <br>
    <label for="birth">Birth Date:</label>
        <input type="date" name="birth_date" id="birth">
    <br>
    <label for="calories">Daily Calorie Intake:</label>
        <input type="number" id="calories" name="calories" value="2000">
    <br>
    <label for="volume">Volume Restrictions:</label>
        <input type="number" name="calories" value="200">
    
    <br>
    <label for="allergies">Select an Allergy:</label><br>
  <select multiple name="allergies" id="allergies">
    <option value="milk">Milk</option>
    <option value="soy">Soy</option>
    <option value="nuts">Tree nut/Peanut</option>
    <option value="eggs">Eggs</option>
    <option value="gluten">Gluten</option>
    <option value="other">Other</option>
  </select>
  
    <br/>
    <br/>

      <input type="submit" value="Submit">
        </fieldset>

     </form>
   
    <div id='message' class='bg-success'>
        <?php 
$submit=filter_input(INPUT_POST,'submit');
if (isset($submit)){
    echo "You have successfully added the patient profile";
}
?>
    </div>
</body>
</html>