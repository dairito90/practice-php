<?php

$array1 = array(  ' a'  => ' Apples' , ' b' => ' Oranges', ' c' => ' Bananas', ' d' => ' Grapes');
$array2 = array(  ' d'  => ' Kiwi , ' e' => ' Prums ', ' f ' => ' Cherry', ' g ' => ' Pears');
$array3 = array_merge( $array1, $array2) ;




echo ' <br/><br/>1:', var_dump($array1);
echo ' <br/><br/>2:', var_dump($array2);
echo ' <br/><br/>Note:'