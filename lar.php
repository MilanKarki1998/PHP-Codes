<?php
function largest($a,$b,$c){
	if($a>$b&&$a>$c){
		echo "$a is largest";
	}
	else if($b>$a&&$b>$c){
		echo "$b is largest";
	}
	else{
		echo "$c is largest";
	}
}
largest(45,7,90);
?>