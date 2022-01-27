<?php
    $array=array(
                    array(11,25,52),
                      array(87,50,86),
                            array(99,98,34)
                     );
$b=0;
for($i=0;$i<count($array);$i++)
  {
       for($j=0;$j<count($array);$j++)
         {
              if($array[$i][$j] > $b)
                  {
                      $b=$array[$i][$j];
                   }
}
}
echo "The highest value from MDA is $b";
?>