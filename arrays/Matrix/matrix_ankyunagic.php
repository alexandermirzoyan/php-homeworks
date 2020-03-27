<?php
/*$anun = array();
$anun = [];
$anun = array(
	array(value1,value2...valueM),
  array(value1,value2...valuenM),
  array(value1,value2...valuenM)
)
$arr = [
  [1,2,3],
  [2,5,6],
  [2,4,5]
];
for($i = 0;$i < count($arr);$i++) {
	for($j= 0;$j < count($arr[$i]);$j++) {
		echo $arr[$i][$j] . nl2br("\n");
	}
}
$arr = [];
$n = 4;
$m = 3;
for($i = 0;$i < $n;$i++) {
	for($j= 0;$j < $m;$j++) {
		$arr[$i][$j] = rand(10,33);
	}
}*/
 //j = i
$arr = [
  [1,2,3],
  [2,5,6],
  [2,4,5]
];
  for($i = 0;$i < count($arr);$i++) {
 	 echo $arr[$i][$i]." ";
 	}
//2.glghavor ankyunagic ev nranic verev
$i = 0,$n - 1
$j = $i,$n - 1
for($i = 0;$i < count($arr);$i++){
	for($j = $i;$j < count($arr);$j++){
	}
}
//3.glghavoric verev  
$i = 0,$n - 2
$j = $i + 1,$n - 1
for($i = 0;$i < count($arr) - 1;$i++){
	for($j = $i + 1;$j < count($arr);$j++){
	}
}
//4.glghavor ev nranic nergev
$i = 0,$n - 1
$j = 0,$i
for($i = 0;$i < count($arr);$i++){
	for($j = 0;$j <= $i;$j++){
//5.glkhavoric nergev
$i = 1,$n - 1
$j = 0,$i -1		
for($i = 1;$i < count($arr);$i++){
	for($j = 0;$j < $i;$j++){

$j = $n - $i - 1
//1.ojandaki vra
$n = count($arr);
for($i = 0;$i < $n;$i++){
	echo $arr[$i][$n - $i - 1];
}
//2.ojandak ev nranic verev
$i = 0,$n - 1
$j = 0,$n - $i -1	
for($i = 0;$i < count($arr);$i++){
	for($j = 0;$j < $n - $i;$j++){
//3.ojandakic verev	
$i = 0,$n - 2
$j = 0,$n - $i - 1 - 1
$j = 0,$n - $i - 2
	for($i = 0;$i < count($arr) - 1;$i++){
	for($j = 0;$j < $n - $i -1;$j++){
//4.ojandak ev nranic nergev	
$i = 0,$n - 1
$j =$n - 1 - $i,$n - 1
for($i = 0;$i < count($arr);$i++){
	for($j = $n - $i -1;$j < $n;$j++){	
//5.ojandakic nergev
$i = 1,$n - 1
$j =$n - 1 - $i +1,$n - 1	
$j =$n - $i,$n - 1	
for($i = 1;$i < count($arr);$i++){
	for($j = $n - $i;$j < $n;$j++){		
?>