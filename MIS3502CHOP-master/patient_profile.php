<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
#container {
    width: 93.75%/*900/960*/;
    min-height: 760px;
    font-size: 1em /*48px/16px*/;
    margin: auto;
    display: block;
            }

#bottom_content{
    width: 100% /*900px/900*/;
    min-width: 100px;
    font-size: 1em;
    display: block;
  }
    
body {
    background-color: lightcyan;;
}

h1 {
    color: black;
    text-align: center;
    font-family: Arial,sans-serif;
}
p {
    font-family: Arial,sans-serif;
    font-size: 15px;
    
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

<div id="container">
<div id="bottom_content" >
    <h1>Patient Profile</h1>
    <p>Name: Patient 1</p>
    
    <p>Birth Date: 05/15/2005</p>
    
    <p>Daily Calorie Intake: 2000 calories</p>
    
    <p>Volume Restrictions: ??</p>
    
    <p>Current Allergies/Limitations: Eggs</p>
    
    <p><a href="current_recipe.php">View Current Recipe</a></p>
    
    <p><a href="edit_patient_profile.php">Edit Patient Profile</a></p>
</div>
</div>
</body>
</html>