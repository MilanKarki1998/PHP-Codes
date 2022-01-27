<?php
	$date1=date_create('2018-10-15');
	$date2=date_create('2018-11-30');
	$diff=date_diff($date1,$date2);
	echo $diff->format("%R %a Days");
?> 
