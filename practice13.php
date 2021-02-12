<?php

function sum($int){
    $result = $int *= 2;
    return $result;
}

echo sum(8);

function f($a, $b){
    return $a + $b;
}

echo f(3,5);

function multiply($arr){
    $result = 1;
    foreach($arr as $a) {
    $result *= $a;
    }
    echo $result;
}    

multiply(array(1,3,5,7,9));

function max_array($arr){
    $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
 }
     echo $max_number;
 }
 
 max_array(array(3,5,7,13,1));
 
 



