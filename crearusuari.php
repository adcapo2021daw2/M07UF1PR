<?php
	echo "<b>CREANT USUARIS</b><br>";
	
	$filename="/var/www/html/M07UF1PR/usuaris";
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut crear el fitxer");
	
	fwrite($fitxer,$_POST["nom"]);
	fwrite($fitxer,":");
	fwrite($fitxer,$_POST["ctsnya"]);
	fwrite($fitxer,"\n");
	fclose($fitxer);
	echo "S'ha registrat amb satisfacció l'usuari: ".$_POST["nom"]."<br>";
?>
 <html>
<link rel="stylesheet" href="projectem07.css">
 <a class="logn" href="http://localhost/M07UF1PR/inicisessio.html"> LOGIN </a>
 </html>
