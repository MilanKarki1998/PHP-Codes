<?php
$college=array("Milan"=>"NCIT","Ram"=>"KMC","Joe"=>'TU');
echo 'Before sortinng <br>';
print_r($college);
echo '<br> After sortinng <br>';
ksort($college);
print_r($college);
?>