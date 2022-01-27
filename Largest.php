<?php
	$a=567;
	$b=872;
	$c=753;
	echo 'The 1st number is '.$a.'<br>';
	echo 'The 2nd number is '.$b.'<br>';
	echo 'The 3rd number is '.$c.'<br>';
	if($a>$b && $a>$c){
		echo 'Largest number is '.$a;
	}
	else if($b>$a && $b>$c){
		echo 'Largest number is '.$b;
	}
	else{
		echo 'Largest number is '.$a;
	}
?>
