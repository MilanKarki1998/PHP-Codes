<?php
function palindrome($n){
	$rev=0;
	$temp=$n;
	while($temp!=0){
		$rev=$rev*10+$temp%10;
		$temp=(int)($temp/10);
	}
	if($rev==$n){
		echo "$n is palindrome";
	}else{
		echo "$n is not palindrome";
	}
}
palindrome(161);
?>