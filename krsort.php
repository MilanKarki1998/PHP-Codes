<?php
$address=array("Milan"=>"Lalitpur","Ram"=>"Kathmandu","Joe"=>'Bhaktapur');
echo 'Before sortinng <br>';
print_r($address);
echo '<br>';
echo 'After sortinng <br>';
krsort($address);
print_r($address);
?>