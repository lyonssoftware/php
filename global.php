<?php
$x = 75;
$y = 25;
 
 // global variables are available in multiple scopes through out the php program 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; hhhjjjj
}
 
addition();
echo $z;
?> 
