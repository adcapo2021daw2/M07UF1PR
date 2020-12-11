<?php
ini_set('display_errors',1);
	
	class productes {
		public $nom;
		public $tipo;
		public $preu; 
		public $ml;
		public $id;
		
		public function __construct($nom,$tipo,$preu,$ml,$id){
			$this->nom=$nom;
			$this->tipo=$tipo;	
			$this->preu=$preu;
			$this->ml=$ml;
			$this->id=$id;
		}
		public function toString(){
			return "NOM:".$this->nom."T IPO:".$this->tipo." PREU:".$this->preu." MILILITRES:".$this->ml." ID:".$this->id;
		}
		
	}
		$filename="/var/www/html/M07UF1PR/productes.txt";
	$fitxer=fopen($filename,"w") or die ("No s'ha pogut crear el fitxer");
	$fan = new productes("fanta","naranja",1,35,1);
	$fan2 = new productes("fanta","limon",1,35,2);
	$fan4= new productes("fanta","zero",1,35,4);
	$coc = new productes("cocacola","clasica",2,35,5);
	$coc2 = new productes("cocacola","light",2,35,6);
	$coc3 = new productes("cocacola","zero",2,35,7);
	$nes = new productes("nestea","clasica",1.5,35,8);
	$nes2 = new productes("nestea","te verde",1.5,35,9);
	$nes3 = new productes("nestea","zero",1.5,35,10);
	$red = new productes("redbull","clasica",2.5,35,11);
	$red2 = new productes("redbull","freesugar",2.5,35,12);
	$red3 = new productes("redbull","zero",2.5,35,13);
	
	fwrite($fitxer,$fan-> nom);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$fan2-> nom);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan2-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan2-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan2-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan2-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$fan4-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$fan4-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan4-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan4-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$fan4-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$coc-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$coc-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$coc2-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$coc2-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc2-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc2-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc2-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$coc3-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$coc3-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc3-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc3-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$coc3-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$nes-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$nes-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$nes2-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$nes2-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes2-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes2-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes2-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$nes3-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$nes3-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes3-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes3-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$nes3-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$red-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$red-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$red-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$red-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$red-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$red2-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$red2-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$red2-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$red2-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$red2-> id);
	fwrite($fitxer,"\n");
	fwrite($fitxer,$red3-> nom);
	fwrite($fitxer,";");	
	fwrite($fitxer,$red3-> tipo);
	fwrite($fitxer,";");
	fwrite($fitxer,$red3-> preu);
	fwrite($fitxer,";");
	fwrite($fitxer,$red3-> ml);
	fwrite($fitxer,";");
	fwrite($fitxer,$red3-> id);
	fwrite($fitxer,"\n");
	fclose($fitxer);
	
	

	
?>

