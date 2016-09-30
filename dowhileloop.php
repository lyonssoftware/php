
<?php
// the statement will execute once, then the while loop  
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    // loop through statement while true
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i is ok";

    /* process i */

} while (0);
?>
