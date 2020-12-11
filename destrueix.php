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
			session_unset();
			$cookie_sessio = session_get_cookie_params();
			setcookie(session_name(),'',time() - 86400, $cookie_sessio['path'], $cookie_sessio['domain'], $cookie_sessio['secure'], $cookie_sessio['httponly']); 
			session_destroy();
			break;
		}
	}
?>
<html>
	<head>
		 <link rel="stylesheet" href="projectem07.css">
		<title>
			DESTRUCCIÓ DE SESSIONS
		</title>
		<body>
			SESSIÓ DE L'USUARI <?php echo $_POST['usuari']?> TANCADA
			<a class="logn" href="http://localhost/M07UF1PR/principal.html">Inicia Sessio</a>
		</body>
	</head>
</html>
