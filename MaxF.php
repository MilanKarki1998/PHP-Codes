<?php
$a=array(1,9,7,34,87,64,90,67,98,108,345);
$max=0;
$smax=0;
$count=count($a);
for($i=0;$i<$count;$i++){
echo $a[$i].'&nbsp';
if($a[$i]>$max){
$smax=$max;
$max=$a[$i];
}
else if($a[$i]<$smax){
$smax=$a[$i];
}
}
echo '<br>Largest Number is '.$max;
echo '<br>2nd Largest Number is '.$smax;
?>