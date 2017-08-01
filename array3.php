<?php

$array1 = array( ' meat' => ' Beef', ' dairy' => ' Milk'  , ' grain' => ' Whole Wheat Bread' , ' fruit' => ' Grapes');
$array2 = array( ' meat' => ' Pork', ' dairy' => ' Milk'  , ' grain' => ' Whole Wheat Bread' , ' fruit' => ' Apples');



echo ' <br/><br/>1:' , var_dump( $array1) ;
echo ' <br/><br/>2:' , var_dump( $array2) ;
echo ' <br /><br/> Difference:', var_dump( array_diff( $array1, $array2)) ;


