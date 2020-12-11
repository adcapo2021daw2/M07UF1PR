<?php
	echo "<b>CREANT PRODUCTES</b><br>";
	
	$filename="/var/www/html/M07UF1PR/productes.txt";
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut crear el fitxer");
	
	fwrite($fitxer,$_POST["nom"]);
	fwrite($fitxer,";");
	fwrite($fitxer,$_POST["tipo"]);
	fwrite($fitxer,";");
	fwrite($fitxer,$_POST["preu"]);
	fwrite($fitxer,";");
	fwrite($fitxer,$_POST["ml"]);
	fwrite($fitxer,";");
	fwrite($fitxer,$_POST["id"]);
	fwrite($fitxer,"\n");
	fclose($fitxer);
	echo "S'ha registrat amb satisfacció el nou producte: <br>";
?>
