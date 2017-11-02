<!DOCTYPE html>
<html>
<title>BLENDERIZED DIET</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="addIngredient.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
h1 {
    color: black;
    font-family: Arial,sans-serif;
    
}

form  { display: table;}
p     { display: table-row;  }
label { display: table-row; }
input { display: table-row; }


</style>
  </head>   
  
<body>

    
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
    <h1 id="profile_title">Add Ingredient</h1>
    
        <form class="ingredientForm">
            <label for="name" class="ingredientFormLabel">Ingredient Name:</label>
            <input type="text" name="name" id="name">
            <br><br>  
            <label for="calories" class="ingredientFormLabel">Calories:</label>
            <input type="number" name="calories" id="calories">
            <br><br>
            <label for="carbohydrates" class="ingredientFormLabel">Carbohydrates:</label>
            <input type="number" name="carbohydrates id="carbohydrates"> g
            <br><br>
            <label for="protein" class="ingredientFormLabel">Protein:</label>
            <input type="number" name="protein" id="protein"> g
            <br><br>
            <label for="vitamin_a" class="ingredientFormLabel">Vitamin A:</label>
            <input type="number" name="vitamin_a" id="vitamin_a"> mg
            <br><br>
            <label for="vitamin_c" class="ingredientFormLabel">Vitamin C:</label>
            <input type="number" name="vitamin_c" id="vitamin_c"> mg
            <br><br>
            <label for="potassium" class="ingredientFormLabel">Potassium:</label>
            <input type="number" name="potassium" id="potassium"> mg
            <br><br>
            <label for="fat" class="ingredientFormLabel">Fat:</label>
            <input type="number" name="fat" id="fat"> g
            <br><br>
            <input type="submit" value="Submit">
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
