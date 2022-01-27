<?php
$a_array=array("Data1"=>array("name"=>"Milan","email"=>"Milan099@gmail.com","age"=>21),"Data2"=>array("name"=>"Ram","email"=>"Ram100@gmail.com","age"=>24));
foreach($a_array as $key=>$value){
	echo $key.':<br>';
	foreach($value as $key1=>$value1){
		echo $key1.'=>'.$value1.'<br>';
	}
}
?>