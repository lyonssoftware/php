
<?php
// the do statement will always be perform once, thne the while loop  
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "i is ok";

    /* process i */

} while (0);
?>
