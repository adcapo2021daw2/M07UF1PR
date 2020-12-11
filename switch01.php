<html>
<head>
	<link rel="stylesheet" href="projectem07.css">
</head>
	<body>
		<b><u>INICI DE LA PROVA DE ESTRUCTURA DE CONTROL SWITCH I DADES DE FORMULARI</u></b><br>
		<?php
			if ($_POST["aliment"]) {
				$menjar = strtoupper($_POST["aliment"]); //Conversió a majúscula
				switch ($menjar){
					case "FANTANARANJA":
						echo "Preu: 1€<br>";
									$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n fanta naranja;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
	
						break;
					case "FANTALIMON":
						echo "Preu: 1€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n fanta limon;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
					
					case "FANTAZERO":
					
						echo "Preu: 1€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n fanta zero;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "COCACOLA":
						
						echo "Preu: 2€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n cocacola;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "COCACOLALIGHT":
						
						echo "Preu: 2€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n cocacola light;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "COCACOLAZERO":
						
						echo "Preu: 2<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n cocacola zero;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "NESTEA":
						
						echo "Preu: 1.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n nestea;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "NESTEAVERDE":
						
						echo "Preu: 1.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n nestea te verde;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "NESTEAZERO":
						
						echo "Preu: 1.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n nestea zero;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "REDBULL":
						
						echo "Preu: 2.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n redbull;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "REDBULLFREESUGAR":
						
						echo "Preu: 2.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n redbull freesugar;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						case "REDBULLZERO":
						
						echo "Preu: 2.5€<br>";
						$filename="/var/www/html/M07UF1PR/fitxers/".$_POST["nom"];
	$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
	$texte="\n redbull zero;";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "S'ha afegit un nou producte al fitxer ".$_POST["nom"]."<br>";
						break;
						
					default:
						echo "No has escollit un dels menjars indicats<br>";
				}
			}
		?>
	
	</body>
	<a class="logn" href="form.html">IR A ATRAS</a>
		<a class="veco" href="manipulacio_fitxers02.html">VER COMANDA</a>
</html>
