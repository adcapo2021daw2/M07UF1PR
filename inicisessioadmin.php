<?php
   if( ($_POST["nom"]=="Admin") && ($_POST["ctsnya"]=="admin"  ) ) {
     echo "Benvingut ". $_POST['nom']. "</br>";
	 }else {
	  echo "Contrasenya incorrecta<br>";
  }
  ?>
<html>
	<link rel="stylesheet" href="projectem07.css">
	<a class="logn" href="http://localhost/M07UF1PR/EsbCom.html">Esborrar Comandes</a>
	<br>
	<a class="signa" href="http://localhost/M07UF1PR/crearproducte.html">Añadir Productes</a>
	<br>
	<a class="elpo" href="http://localhost/M07UF1PR/EsbCom.html">Eliminar Productes</a>
	<a class="elpoa" href="http://localhost/M07UF1PR/Verproductes.php">Ver productes</a>
	<a class="logout" href="http://localhost/M07UF1PR/destrueix.php">Logout</a>
</html>
