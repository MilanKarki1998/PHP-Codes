<?php
function palindrome($n){
	$rev=0;
	
	for($temp=$n;$temp!=0;$temp=(int)($temp/10)){
		$rev=$rev*10+$temp%10;
		
	}
	if($rev==$n){
		echo "$n is palindrome";
	}else{
		echo "$n is not palindrome";
	}
}
palindrome(245);
?>