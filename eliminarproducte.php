<?php
$filename="/var/www/html/M07UF1PR/productes.txt"; 
$fp=fopen($filename,"r+") or die ("No s'ha pogut validar l'usuari"); 
if ($fp) { $mida_fitxer=filesize($filename);
$producte = explode(PHP_EOL, fread($fp,$mida_fitxer)); 
} 
foreach ($producte as $product) { 
$logpwd = explode(";",$product); 
if (($_POST['id'] == $logpwd[0])){ 
$a = $product; 
$b = file_get_contents('productes');; 
$c = preg_replace("/$a/", '', $b); 
file_put_contents($filename, $c); } }
echo "El producte ha sigut eliminat";
?>
