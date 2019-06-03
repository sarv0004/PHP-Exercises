<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$i=1;
while ($i <= 10){
	echo $i . "<br>";
	$i++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$numbers = range(5, 100, 5);
//print_r($numbers);
/*
Use for-loop and if-statement to print all odd numbers.
How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

for ($n = 0; $n < sizeof($numbers); $n++){

	if($numbers[$n]%2 != 0)
		echo $numbers[$n]." % 2 = ". ($numbers[$n]%2) . " -> odd number<br>";
	else
			 $numbers[$n]." % 2 = ". ($numbers[$n]%2) . " -> even number <br>";
    
} 

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Burger",
         "Fries",
         "Pizza",
         "Ice Cream"];
/*
Use while-loop to print array elements (every food in a new row).
*/
$f = 0;

while ($f < sizeof($food)){
	echo "<p>".$food[$f]."</p>\n";
	$f++;
}
/*
Use for-loop to print array elements (every food in a new row).
*/

for($f = 0; $f < sizeof($food); $f++){
	echo "<p>".$food[$f]."</p>\n";
}
/*
Use foreach-loop to print array elements (every food in a new row).
*/
foreach ($food as $key => $value) {
	echo "<p>".$value."</p>\n";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";
for($f = 0; $f < sizeof($food); $f++){
	echo "<li>".$food[$f]."</li>\n";
}
echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
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
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
foreach ($food_assoc as $food => $meal) {

	print_r($food);
	echo "<br>";
	print_r($meal);
}
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<ul>";
foreach ($food_assoc as $food => $meal) {
	echo "<li>". $food . "</li>";
		echo "<ul>";
			foreach ($meal as $category => $value) {
				echo "<li>".$category.": ". $value . "</li>";
			}
		echo "</ul>";
}
echo "</ul>";