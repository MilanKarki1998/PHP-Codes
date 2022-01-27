<?php
$a=array(78,67,95,76,87,90,56,90);
$b=0;
foreach($a as $value){
echo $value.'&nbsp';
if($b<$value){
$b=$value;
}
}
echo '<br>Largest Number is '.$b;
?>