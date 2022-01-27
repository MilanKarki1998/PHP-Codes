<?php
$a=array(1,9,7,34,87,64,90,67,98);
$b=0;
$count=count($a);
for($i=0;$i<$count;$i++){
echo $a[$i].'&nbsp';
if($b<$a[$i]){
$b=$a[$i];
}
}
echo '<br>Largest Number is '.$b;
?>