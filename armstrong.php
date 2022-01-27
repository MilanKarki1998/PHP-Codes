<?php
function armstrong($n){
	$rem=0;
	$temp=$n;
	while($temp!=0){
		$rem_a=$temp%10;
		$rem=$rem_a*$rem_a*$rem_a+$rem;
		$temp=(int)$temp/10;
	}
	if($rem==$n){
		echo "$n is armstrong";
	}else{
		echo "$n is not armstrong";
	}
}
armstrong(153);
?>