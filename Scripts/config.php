<?php

$type = 'mysql';
$server = '192.185.2.183';
$db = 'markwigh_ElevateUsers';
$port = '3306';

$charset = 'utfmb4';

$username = 'markwigh_admin';
$password = '4dm1n!str8tr$';

$options = [
	PDO::ATTR_ERRMODE => POD::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];
	
$dsn = '$type:host=$server;dbname=$db;port=$port;charset=$charset';
try{
	$pdo = new (PDO($dsn, $username, $password, $options);
	echo 'Connection Successful!';
} catch(PDOException $e){
	throw new PDOException($e->getMessage()m $e->getCode());
}

?>