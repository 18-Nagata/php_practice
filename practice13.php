<?php
function dubble($int){
  $result = 2;
  $result *= $int;
  return $result;
}
echo dubble(3);
function f($a, $b){
    $result = $a + $b;
   return $result;
}
echo f(6, 18);
function multiply($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  echo $result;
}
multiply(array(1
, 3, 5 ,7, 9));
echo "\n";
function max_array($arr){
    $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
 }
     return $max_number;
 }
 ?>