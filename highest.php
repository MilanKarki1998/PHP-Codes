<?php
    $array=array(
                    array(98,60,56),
                      array(187,92,45),
                            array(64,89,100)
                     );
$b=0;
foreach($array as $array_1)
{
     foreach($array_1 as $key=>$val_1)
{
      if($val_1>$b)
{
      $b=$val_1;
}
}
}
   echo "The highest value from MDA is $b";
?>