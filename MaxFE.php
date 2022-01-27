<?php
$a=array(78,67,95,76,87,90,56,87,34,21);
$max=0;
$smax=0;
foreach($a as $value){
echo $value.'&nbsp';
if($max<$value){
$smax=$max;
$max=$value;
}
else if($smax<$value){
$smax=$value;
}
}
echo '<br>Largest Number is '.$max;
echo '<br>2nd Largest Number is '.$smax;
?>