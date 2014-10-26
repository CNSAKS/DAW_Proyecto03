<?php
require_once "cabecera.php";
require_once "cuerpo.php";
require_once "pie.php";

class pagina{
	public $titulo="Titulo de la pagina";
	private $cabecera,$cuerpo,$pie;
	
	function __construct($numFil,$numCol,$tit,$text){
		$this->cabecera = new cabecera();
		$this->cabecera->setMenu();		
		$this->cuerpo = new cuerpo();
		if(!is_null($numFil) && !is_null($numCol)){
		$this->cuerpo->setTabla($numFil,$numCol);
		}
		if(!is_null($tit) && !is_null($text)){
		$this->cuerpo->setTexto($tit,$text);
		}
		$this->pie = new pie();
		$this->pie->setPie();	
	}
	
	function getPagina(){
		echo $this->cabecera.$this->cuerpo.$this->pie;
	}
}
?>