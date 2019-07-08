<?php

//問1
$name = "shunta";
if ($name = "shunta"){
  echo "私の名前は駿太です";
} else{
  echo "私の名前ではありません";
}
echo "\n";

//問2
$total = 0;
for($i=0;$i<=10000;$i++){
  $total += $i;
}
echo $total;
echo "\n";

//問3
$fruits = array("apple","banana","lemon","orange","grape");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}
echo "\n";

//問4
$start = 1;
$end = 100;
for($i = $start;$i <= 100;$i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>