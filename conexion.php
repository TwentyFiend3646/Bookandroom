<?php

$host='qagp640.bookandroom.es';
$bd='qagp640';
$username='qagp640';
$password='Castellon5';

$conexion= new mysqli($host,$username,$password,$bd);

if($conexion->connect_error){
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";

?>