<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercici 2</title>

</head>
<body>

<?php 
class Usuari {
	protected $nom;
	protected $password;

	public function __construct($nom, $pass)
	{
		$this->nom = $nom;
		$this->password = $pass;
	}

	public function getNom() 
	{
		return $this->nom;
	}

	public function setNom($nom) 
	{
		$this->nom = $nom;
	}

	public function getPassword() 
	{
		return $this->password;
	}

	public function setPassword($pass) 
	{
		$this->password = $pass;
	}
	public function saludar()
	{
		echo "Hola soc el ".$this->nom;
	}
}

class Administrador extends Usuari {
	
	
	public function banejar($nomUsuari)
	{
		return $nomUsuari." ha estat banejat.";
	} 

}

$usu1 = new Usuari('Joan', 222);
$admin1 = new Administrador('Jose', 333);
?>

<div>
	<?php 
		echo "Usuari 1 -> Nom: ".$usu1->getNom();
		echo "<br>";
		echo "Usuari 1 -> Contrasenya: ".$usu1->getPassword();
		echo "<br>";
	 ?>
</div>
<div>
	<?php
		echo $usu1->saludar(); 
	 ?>
</div>
<div>
	<?php 
		echo "Admin -> Nom: ".$admin1->getNom();
		echo "<br>";
		echo "Admin -> Contrasenya: ".$admin1->getPassword();
		echo "<br>";
	 ?>
</div>
<div>
	<?php echo $admin1->banejar('Joan'); ?>
</div>
 

</body>
</html>