<?php
	$a=0;
	$b=1;
	$i=0;
	echo $a."&nbsp";
	echo $b."&nbsp";
	while ($i<13 )
	{
		$c = $a+ $b ;
		echo $c."&nbsp";
		$a = $b ;
		$b = $c ;
		$i=$i+1;
	}
?>
