<?php
$server = 'localhost';
$username = 'root';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}