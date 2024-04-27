<?php

$type = 'mysql';
$server = '192.185.2.183';
$db = 'markwigh_ElevateUsers';
$port = '3306';

$charset = 'utf8mb4';

$username = 'markwigh_admin';
$password = '4dm1n!str8tr$';

$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];
	
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
try{
	$pdo = new PDO($dsn, $username, $password, $options);
} 
catch (PDOException $e) {
    // Log the error instead of echoing directly
    echo '<script>console.error("Connection failed: ' . $e->getMessage() . '");</script>';
    // Display a generic error message to the user
    echo 'Sorry, something went wrong with DB connection';
}

?>