<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<style>
#delete {
    font-family: "rubrik",Arial,sans-serif;
    font-size: 15px;
    color: red;
}

#edit_title {
    text-align: center;
}

#add {
    font-family: "rubrik",Arial,sans-serif;
    font-size: 15px;
    color: blue;
}

@media
only screen and (max-width: 760px) {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr {
		display: block;
	}

</style>

</head>

<body>


    <div class="container-fluid">
 <div class="row">
        <div class="col-xl-12 largeScreen">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="dashboard.html"><img src="../logo.PNG"class="navBarImage"></a>
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
                        <a class="dropdown-item" href="#">Add Recipe</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingredient
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../ingredient/ingredient_add.php">Add Ingredient</a>
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

        <div class="row" >
        <h1 id='edit_title'>Add Recipe </h1>
    </div>
    <br/>
    <br/>

<div style="max-width: 100%" class="row" id="row1">


<table style="width: 100%" class="table-responsive table" >

    <tr>
    <thead>
    <th></th>
    <th colspan="2">Liquid</th>
    <th colspan="2">Protein</th>
    <th colspan="2">F&V: Vitamin A</th>
    <th colspan="2">F&V: Vitamin C</th>
    <th colspan="2">F&V: Other</th>
    <th colspan="2">F&V: Potassium</th>
    <th colspan="2">Starches</th>
    <th colspan="2">Fat</th>
    <th colspan="2">Supplement Needs</th>
    <th colspan="2">Other Additions Needed</th>
  </tr>
</thead>
  <tr>
    <th rowspan="10">Original</th>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>

  </tr>
  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>
  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>

  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>

  </tr>

  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>

  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>

  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>

  </tr>

  <tr>
   <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>

  <tr>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
    <td>Food</td>
    <td>Volume</td>
  </tr>

  <tr>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Food<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
    <td>Volume<p id="delete">Delete Item (-)</p><p id="add">Add Item (+)</p></td>
  </tr>


  <tr>
    <th>Calories</th>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
    <td colspan="2"><input type="number" name="calories">/200</td>
  </tr>
  
  <tr>
    <th>Required Servings</th>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
    <td colspan="2"><input type="number" name="servings"></td>
  </tr>
</table>

    </div>
    <div class="row">
            <input type="submit" value="Submit Recipe">

    </div>
</div> <!--container-->
</body>
</html>
