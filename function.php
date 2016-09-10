<?php 

$a=10;
$b=13;
// functions perform a list of steps in order; perform the function add() with two parameters
function add($a,$b){
    echo "The Sum of $a+$b= ", $a+$b, "<br />";
    $a=5;
    $b=10;
    echo "The sum is=" ,$a+$b , "<br />" ;    }
add($a,$b);
echo $a+$b;

?>
