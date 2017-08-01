<?php 

$names = array(  '  Doug' , '  Julia ' , '  George ' , '  Francois ' ) ;


$foundYesorNo = in_array( '  George' , $names);
$foundKey = array_search( '  George' , $names) ;



var_dump( $names) ;
echo  ' <br />Found George:' , var_dump( $foundYesorNo);
echo "<br />Found Key: $foundKey " ;
echo  " <br />Retrieved Name: { $names[ $foundKey]}" ;