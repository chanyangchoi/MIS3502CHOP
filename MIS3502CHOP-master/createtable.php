<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="main.css">

</head>

<body>
    <div class="container-fluid">  
    
        
    <div class="row">
        <div class="col-xl-12 largeScreen">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"><img src="logo.PNG"class="navBarImage"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  </ul>
                   <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
    </div>
 <br/>       
<div class="row" id="row0">
            
 <form method="post" id="diet">
        <fieldset>
                <legend>Diet Type</legend>
            <input type="checkbox" name="none" value="none" />None <br />
            <input type="checkbox" name="milk_free" value="milk_free" />Milk Free<br />
            <input type="checkbox" name="soy_free" value="soy_free" />Soy Free<br />
            <input type="checkbox" name="tree_peanut_free" value="tree_peanut_free" />Tree Free/Peanut Free<br />
            <input type="checkbox" name="egg_free" value="egg_free" />Egg Free<br />
            <input type="checkbox" name="vegetarian" value="vegetarian" />Vegetarian<br />
            <br/>
            <input type="submit" value="See Recipe" id="see_recipe" name="see_recipe" />            
        </fieldset>
</form>

            
        </div>        
    <br/>    

<div style="max-width: 100%" class="row" id="row1">

<?php 
$see_recipe=filter_input(INPUT_POST,'see_recipe');
if (isset($see_recipe)){
    echo '<table style="width: 100%" class="table-responsive table">

 
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
    <th>Calories</th>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
  
  <tr>
    <th>Required Servings</th>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
    <td colspan="2"></td>
  </tr>
</table>
';
};?>  

    </div>
</div> <!--container-->
</body>
</html>

