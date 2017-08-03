<?php 

$thisIsGlobal = ' GLOBAL' ;

function  test () {
	echo '<br/>' , 'Output from Function test() ' ;
	$thisIsLocal = ' LOCAL' ;


	global $thisIsGlobal ;
	echo '<br /> , $thisIsGlobal ' ;

	echo '<br />', $thisIsLocal ;

	return TRUE ;
	
}