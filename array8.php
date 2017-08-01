<?php 

$arrayNumeric = array( 22, 44 , 11, 99, 88) ;
sort( $arrayNumeric, SORT_NUMERIC) ;


echo ' <pre>' ;
var_dump( $arrayNumeric) ;


$lastElement = array_pop( $arrayNumeric) ;
echo " <br />Removed Element : $firstelement <br / >" ;

	
