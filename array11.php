<?php 

$arrayNumeric = array( 22, 44 , 11, 99, 88) ;
$arrayAssoc = array(  ' a'  => ' Apples' , ' b' => ' Oranges', ' c' => ' Bananas', ' d' => ' Grapes');

arsort( $arrayAssoc, SORT_NUMERIC) ;



echo '<br />Numeric:' , var_dump($arrayNumeric) ;
