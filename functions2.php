
<?php
function monthNames()
{
return array('January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December');
}

function dropDownMonths()
 {
   $menu = '<select name="months">' . PHP_EOL;
   $name = monthNames();
   foreach($name as $month){
     $menu .= "<option>$month</option>\n";
   }
   $menu .= '</select>' . PHP_EOL;
   return $menu;
 }
 echo dropDownMonths();

?>