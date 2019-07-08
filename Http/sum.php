
<?php
//課題1
function output($value){
    $result = $value * 2;
    return $result;
}
echo output(10);
echo "\n";
?>


<?php
//課題2
function f($a, $b){
 $result = $a + $b;
 return $result;
 }
 echo f(3, 4);
 ?>
 
<?php
//課題3
$arr = array(1,3,5,7,9);
  echo $arr[0]* $arr[1]*$arr[2]*$arr[3]*$arr[4];
?>

<?php
//課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 ?>



<?php
//課題5_strip_tags
$text = '<p>あいうえお</p><!-- Comment --> <a href="#fragment">かきくけこ</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');
echo "\n";
?>

<?php
//課題5_array_push
$arr = array("肉","魚");
array_push($arr, "卵","野菜");
print_r($arr);
echo "\n";
?>

<?php
//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";
?>

<?php
//time
echo "現在のUnixタイムスタンプ:".time();
echo "\n";

//3日後のタイムスタンプを取得
$nweek = time() + (3*24*60*60);
echo '3日後のUnixタイムスタンプ:'.$nweek;
echo "\n";

?>

<?php
//mktime
$timestamp = mktime(0,0,0,8,20,1990);
echo '1990年8月20日0時0分0秒のUnixタイムスタンプは'.$timestamp;
echo "\n";
?>

<?php
//date
$timestamp = time();
echo date("Y/m/d");
echo "\n";
?>

<?php
$timestamp = time();
echo date("Y年n月j日");
echo "\n";
?>