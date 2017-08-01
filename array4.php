<?php 



$array1 = array( 1, 2, 3, 4, 5 , 6 , 7, 8, 9);
$array2 =  array_slice( $array1, 2 , 5) ;




echo  ' <br/><br/>Original: ' , var_dump( $array1) ;
echo  ' <br/><br/>Slice: ' , var_dump( $array2) ;
