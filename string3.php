<?php

$text = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';

$length = strlen($text);


$pos = strpos($text, 'Quick');


echo '<table border="1">';
printf('<tr><th> String </th><td>%s</td></tr>', $text);
printf('<tr><th> Lenght </th><td>%s</td></tr>', $text);
printf('<tr><th> Position </th><td>%s</td></tr>', $text);
echo '</table>';
