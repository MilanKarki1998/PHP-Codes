<?php
$college='Nagarjuna College Of Information College';
$length=strlen($college);
$uppercase=strtoupper($college);
$lowercase=strtolower($uppercase);
$uc=ucwords($lowercase);
$rep=str_replace('College','Campus',$college);
echo 'The length is '.$length.'<br>';
echo 'The uppercase is '.$uppercase.'<br>';
echo 'The lowercase is '.$lowercase.'<br>';
echo $uc.'<br>';
echo $rep.'<br>';
?>