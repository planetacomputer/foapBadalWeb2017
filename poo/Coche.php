<?php
require_once("Encendible.php");
require_once("Marxable.php");
class Coche implements Encendible, Marxable{
      private $marxa;
   	private $gasolina; 
   	private $bateria; 
   	private $estado = "apagado"; 

   	function __construct(){ 
         //echo "Coche instanciat!";
      	$this->gasolina = 0; 
      	$this->bateria = 5; 
         $this->marxa = 0;
   	} 

      public function getMarxa(){
         return $this->marxa;
      }

      public function marxaDalt(){
         $this->marxa++;
      }

      public function marxaBaix(){
         $this->marxa--;
      }
   	
      public function encender(){ 
      	if ($this->estado == "apagado"){ 
         	if ($this->bateria > 0){ 
            	if ($this->gasolina > 0){ 
               	$this->estado = "encendido"; 
               	$this->bateria --; 
               	echo "<br><b>Enciendo...</b> estoy encendido!"; 
            	}else{ 
               	echo "<br>No tengo gasolina"; 
            	} 
         	}else{ 
            	echo "<br>No tengo batería"; 
         	} 
      	}else{ 
         	echo "<br>Ya estaba encendido"; 
      	} 
   	} 

   	public function apagar(){ 
      	if ($this->estado == "encendido"){ 
         	$this->estado = "apagado"; 
         	echo "<br><b>Apago...</b> estoy apagado!"; 
      	}else{ 
         	echo "<br>Ya estaba apagado"; 
      	} 
   	} 

   	public function cargar_gasolina($litros){ 
      	$this->gasolina += $litros; 
      	echo "<br>Cargados $litros litros"; 
   	} 

      public function anarEndavant(){
         if($this->estado == "encendido"){
            $this->marxaDalt();
         }
         else{
            echo "<br>No es pot canviar de marxa amb el cotxe apagat.";
         }
         
      }
}

/*$coche = new Coche();
$coche->cargar_gasolina(1);
for ($i=0; $i <= 5; $i++) { 
   $coche->encender();
   $coche->anarEndavant();
   echo "Estic a la marxa: ".$coche->getMarxa();
   $coche->apagar();
}*/
