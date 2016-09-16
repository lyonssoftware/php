<?php
$x = 75;
$y = 25;
 // global variables are variables accessible outside the scope it is declared in
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition();
echo $z;
?> 
