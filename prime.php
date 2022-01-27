<?php
function prime($n){
	for($i=1;$i<$n;$i++){
		for($j=2;$j<$n;$j++){
			if($i%$j==0){
				break;
			}
		}
		if($i==$j){
			echo $i."&nbsp";
		}
	}
}
echo "Prime number between 1 to 100 are:<br>";
prime(100);
?>