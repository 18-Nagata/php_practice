<?php
$name = "nkgata";

if($name == "nagata") {
    echo '私はnagataです。';
} else {
    echo '私はnagataではありません。';
}

$total = 0;
for($i = 1; $i <= 10000; $i++) {
     $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "lemon", "banana", "orange");

foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}


$start = 1;
$end = 100; 


for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

 