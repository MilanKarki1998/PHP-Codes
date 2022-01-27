<?php
function armstrong($n){
	$rem=0;
	for($temp=$n;$temp!=0;$temp=(int)$temp/10){
		$rem_a=$temp%10;
		$rem=$rem_a*$rem_a*$rem_a+$rem;
	}
	if($rem==$n){
		echo "$n is armstrong";
	}else{
		echo "$n is not armstrong";
	}
}
armstrong(564);
?>