<?php
	$t1=strtotime('tomorrow');
	echo "Today is ".date("Y-m-d l",$t1).'<br>';
	$t2=strtotime('next Sunday');
	echo "Next sunday is ".date("Y-m-d l",$t2).'<br>';
	$t3=strtotime('+3 months');
	echo "Day after 3 months id ".date("Y-m-d l",$t3).'<br>';
?>
