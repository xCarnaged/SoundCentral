<?php
$server = 'localhost';
$username = 'root';
$password = 'Database1234567890';
$database = 'sound_system_rental';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}