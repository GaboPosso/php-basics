<?php
//Single line comment
/* 

Multiline comment

*/
// print on screen
echo("Hello World");
echo  "<br/> Hello World <br/> I'm <h1>Learning PHP</h1>";

//Variables
$name = "Gabriel";
$Name = "David";

//Concatenate variables and strings

echo "name"."&nbsp;"."Name";
echo "<br/>";

$num1 = 5;
$num2 = 16;

$sum = $num1 + $num2;

echo $sum;

echo "<br/> The variable \$sum has the value $sum";


$module = $num2 % 2;

if($module == 0) {
  echo "<br/> It is an even number";
} else {
  echo "<br/> It is an odd number.";
}
echo "<br/>";

for($i=0; $i<=10; $i++) {
  echo $i."<br/>";
}
?>
