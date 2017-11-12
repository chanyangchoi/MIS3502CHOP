<?php 
/*if (isset($_SESSION[''])){
    $ingredients = getIngredients($name);
    exit();
}*/
?>

<table style="width: 100%" class="table-responsive table" >
<thead>
    <tr>    
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
<?php

//$ingredients = getIngredients($name);
//getIngredients($name);

function getIngredients($result){
    global $ingredients;
    global $db;
    $sql = "SELECT `name`, `serving_unit`" 
            . "`FROM `ingredient` "
            . "WHERE `name` = `:name` AND `serving_unit` = `:serving_unit";
    $statement = $db->prepare($sql);
    $statement->bindValue(':name',$name);
    $statement->bindValue(':serving_unit',$serving_unit);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}

getIngredients($result);

foreach($ingredients as $ingredient)
{
    $name = $ingredient['name'];
    $serving_unit = $ingredient['serving_unit'];
    
    //getIngredients($result);
    
    echo 
    "<tr>
    <th rospan='10'>Original</th>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    <td>$item</td>
    <td>$serving_unit</td>
    
  </tr>";
}
?>
</table>
 