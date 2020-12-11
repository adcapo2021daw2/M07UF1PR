<?php
	$filename="/var/www/html/M07UF1PR/productes.txt";
	$fitxer=fopen($filename,"r") or die ("No s'ha pogut obrir el fitxer");
	$mida_fitxer=filesize($filename);
	$texte_llegit=fread($fitxer,$mida_fitxer);
	echo $texte_llegit."<br>";
	fclose($fitxer);	
?>
