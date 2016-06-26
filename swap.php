<?php
  // method to swap two variables by using a substitute variable 
  $one = 1;
  $two = 2;
  
  // print variables 
  echo $one;
  echo $two;
  
  // swap with temporary variable 
  $temp = $one;
  $one = $two;
  $two = $temp;
  
   // print new variables 
  echo $one;
  echo $two;
?>
