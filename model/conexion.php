<?php

//variables conexion MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicamentos";

// crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//verifica conexion

if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

?>