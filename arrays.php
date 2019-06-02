<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Burger",
         "Fries",
         "Pizza",
         "Ice Cream"];
/*
Print every array element in a new line.
*/
foreach ($food as $f) {
  echo "{$f}<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>";
while($i < sizeof($food)){
  echo "<li>{$food[$i]}</li>";
  $i++;
}
echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = ["Burger" => "main course",
               "Fries" => "main course",
               "Pizza" => "main course",
               "Ice Cream" => "dessert"];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo "Burger | ". $food_assoc["Burger"]."<br>";
echo "Fries | ". $food_assoc["Fries"]."<br>";
echo "Pizza | ". $food_assoc["Pizza"]."<br>";
echo "Ice Cream | ". $food_assoc["Ice Cream"]."<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$burger = ['type' => "main course",
          'origin' => "America"];

$fries = ['type' => "main course",
          'origin' => "America"];

$pizza = ['type' => "main course",
          'origin' => "Italy"];

$ice_cream = ['type' => "dessert",
              'origin' => "China"];

$food_assoc = ['Burger' => $burger,
               'Fries' => $fries,
               'Pizza' => $pizza,
               'Ice Cream' => $ice_cream];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo 'Burger | '. $food_assoc['Burger']['type']." | ".$food_assoc['Burger']['origin']."<br>";
echo 'Fries | '. $food_assoc['Fries']['type']." | ".$food_assoc['Fries']['origin']."<br>";
echo 'Pizza | '. $food_assoc['Pizza']['type']." | ".$food_assoc['Pizza']['origin']."<br>";
echo 'Ice Cream | '. $food_assoc['Ice Cream']['type']." | ".$food_assoc['Ice Cream']['origin'];

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>Burger</td>
    <td>".$food_assoc['Burger']['type']."</td>
    <td>".$food_assoc['Burger']['origin']."</td>
  </tr>
  <tr>
    <td>Fries</td>
    <td>".$food_assoc['Fries']['type']."</td>
    <td>".$food_assoc['Fries']['origin']."</td>
  </tr>
  <tr>
    <td>Pizza</td>
    <td>".$food_assoc['Pizza']['type']."</td>
    <td>".$food_assoc['Pizza']['origin']."</td>
  </tr>
  <tr>
    <td>Ice Cream</td>
    <td>".$food_assoc['Ice Cream']['type']."</td>
    <td>".$food_assoc['Ice Cream']['origin']."</td>
  </tr>
</table>";