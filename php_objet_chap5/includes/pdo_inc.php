<?php 
 // Connexion au serveur 
try { 
	$dns = 'mysql:host=localhost;dbname=' . DB_NAME;



	// Options de connexion 
$options = array( 
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 

$db = new PDO( $dns, DB_LOGIN, DB_PASSWORD, $options );
} 

catch ( Exception $e ) 
{
die("Connexion a MySQL impossible : " . $e->getMessage()); 
}

?>