<?php

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','book_example');
// Establish database connection.
try{
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,
	DB_USER, DB_PASS,
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

	$sql = "SELECT * FROM usuarios WHERE clave = :clau";
	$query = $dbh->prepare($sql);
	
	$clave = "1111";
	$query->bindParam(':clau', $clave, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	//print_r($results);
	if($query->rowCount() > 0){
		foreach($results as $result){
			echo $result->nombre . ", ";
			echo $result->apellido. ", ";
			echo $result->clave. "<br> ";
		}
	}

	//Aixo es la mateixa query amb nous parametres
	echo "<br><br>";
	$clave = "6927";
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if($query->rowCount() > 0){
		foreach($results as $result){
			echo $result->nombre . ", ";
			echo $result->apellido. ", ";
			echo $result->clave. "<br> ";
		}
	}


}
catch (PDOException $e){
	exit("Error: " . $e->getMessage());
}
