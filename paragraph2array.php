<?php

$content = file_get_contents("/home/manu/www/syntagmasquare/SS2AlanMonaghanIreland.txt");
$parags = preg_split('#(\r\n?|\n)+#', $content);

$fp = fopen('/home/manu/www/syntagmasquare/SS2AlanMonaghanIreland.po', 'w');


foreach ($parags as $parag) {
	$po = "msgid \"".$parag."\"\n";
	$po .= "msgstr \"\"\n\n";

	fwrite($fp, $po);
}

fclose($fp);

?>