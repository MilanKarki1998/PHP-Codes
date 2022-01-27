<?php
$address=array("Bhaktapur","Kathmandu",'Lalitpur','Jhapa');
echo 'Before sortinng <br>';
print_r($address);
echo '<br>';
echo 'After sortinng <br>';
rsort($address);
print_r($address);
?>