<?php
	$college='Nagarjuna College Of Information Technology';
	$uppercase=strtoupper($college);
	$lowercase=strtolower($uppercase);
	$uc=ucwords($lowercase);
	echo $college.'<br>';
	echo 'The uppercase is '.$uppercase.'<br>';
	echo 'The lowercase is '.$lowercase.'<br>';
	echo 'String with first letter capital is '.$uc.'<br>';
?>