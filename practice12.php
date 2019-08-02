<?php
$name= "Nagata";
if ($name="Nagata") {
    echo '私はNagataです。';
}else {
    echo '私はNagataではありません。';
}
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("apple", "orange", "banana", "strawberry", "grape");
foreach ($fruits as $fruit) {
    echo "要素は" . $fruits;
    echo "\n";
}
/* for文の始めの値を定義する /

/* for文の終わりの値を定義する */


for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}  