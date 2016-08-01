<?php
// declare and intialize array 
$fruits = array("lemon", "orange", "banana", "apple", "grapes");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>
