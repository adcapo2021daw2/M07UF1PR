
<?php
	$fitxer_usuaris="/var/www/html/M07UF1PR/usuaris";
	$fp=fopen($fitxer_usuaris,"r") or die ("No s'ha pogut validar l'usuari");
	if ($fp) {
		$mida_fitxer=filesize($fitxer_usuaris);	
		$usuaris = explode(PHP_EOL, fread($fp,$mida_fitxer));
    }
   	foreach ($usuaris as $usuari) {
		$logpwd = explode(":",$usuari);
		if (($_POST['usuari'] == $logpwd[0]) && ($_POST['ctsnya'] == $logpwd[1])){
			fclose($fitxer);
			session_name($_POST["usuari"]);
			session_start();
			break;
		}
	}
	 echo "La darrera visita a la web va ser el: " . $_SESSION["data_darrer_acces"] . ".<br>";
	 date_default_timezone_set('Europe/Andorra');
			$_SESSION['data_darrer_acces'] = date('d/m/Y h:i:s');
?>
	
<html>
	<link rel="stylesheet" href="projectem07.css">
	<a href="http://localhost/M07UF1PR/Vercocacola.php"><img class="logoc" src="logoc.jpg"></a>
	<br>
	<a href="http://localhost/M07UF1PR/Verfanta.php"> <img class="logof" src="logof.jpg"></a> 
	<br>
	<a href="http://localhost/M07UF1PR/Vernestea.php"><img class="logon" src="logon.jpg"></a> 
	<br>
	<a href="http://localhost/M07UF1PR/Verredbull.php"><img class="logor" src="logor.jpg"></a> 
	<br>
	<a href="http://localhost/M07UF1PR/form.html"><img class="carrito" src="carrito.jpg"></a> 
	<a class="logout" href="http://localhost/M07UF1PR/destrueix.php">Logout</a>
</html>

