<?php
$name = "永田智耶";
if ($name == "永田智耶") {
    echo "私は永田智耶です。";
} else {
    echo "私は永田智耶ではありません。";
}
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
$fruits = array("appple", "orange", "grape", "banana", "strawberry");
foreach ($fruits as $fruits) {
  echo  $fruits;
   echo "\n";
}
for ($i = 1; $i <= 100; $i++) {
  if ($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}