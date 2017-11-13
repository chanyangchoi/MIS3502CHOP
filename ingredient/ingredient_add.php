<!DOCTYPE html>
<html lang="en">
<title>Add New Ingredient</title>
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
        <link rel="stylesheet" href="addIngredient.css">

    <link rel="stylesheet" href="../main.css">
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

@media
only screen and (max-width: 760px) {

	/* Force table to not be like tables anymore */
	form {
		display: block;
                text-align: center;
	}
</style>
  </head>

<body>


<div id="container" style="width: 100%">
  <div class="row">
        <div class="col-xl-12 largeScreen">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="dashboard.php"><img src="../logo.PNG"class="navBarImage" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  </ul>
                   <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="../dashboard.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patients
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="dashboard.php">Patient List</a>

                          <a class="dropdown-item" href="../patient/patient_add.php">Add Patients</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recipe
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../recipe/recipe_add.php">Add Recipe</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingredient
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Add Ingredient</a>
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

    <h1 id="profile_title">Add New Ingredient</h1>
    <form class="ingredientForm" action='index.php' method='post'>
        <label for="ingredient_name" class="ingredientFormLabel">Ingredient Name:</label>
        <input type="text" name="ingredient_name" id="ingredient_name">
        <label for="serving_unit" class="ingredientFormLabel">Serving Unit:</label>
        <input type="text" name="serving_unit" id="serving_unit">
        <label for="calories_per_serving" class="ingredientFormLabel">Calories Per Unit:</label>
        <input type="number" name="calories_per_serving" id="calories_per_serving"> kcal
        <br><br>
        <label for="category" class="ingredientFormLabel">Category:</label>
        <select name='category_id' id="category">
            <option value=''>Select Category </option>
            <option value = '1'>Liquid</option>
            <option value = '2'>Protein</option>
            <option value = '3'>F&V: Vitamin A</option>
            <option value = '4'>F&V: Vitamin C</option>
            <option value = '5'>F&V: Other</option>
            <option value = '6'>F&V: Potassium</option>
            <option value = '7'>Starches</option>
            <option value = '8'>Fat</option>
            <option value = '9'>Supplements Needs</option>
            <option value = '10'>Other Additions Needed</option>
        </select>
        <br><br>
        <input type="submit" value="Submit" name="submit" class="addIngredientButton">
    </form>
</div>

</body>
</html>
