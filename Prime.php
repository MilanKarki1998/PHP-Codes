<?php
$n=1;
$i=0;
$count=0;
echo 'Prime Numbers Between 1 to 100 are:<br>';
while($n<=100){
	$count=0;
	$i=2;
	while($i<=$n/2){
	if($n%$i==0){
		$count++;
		break;
	}$i++;
	}if($count==0 && $n!=1){
		echo $n."&nbsp";
	}
	$n++;
}
?>