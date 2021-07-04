<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "test2";

$conn = mysqli_connect ($server,$user,$pass,$db);

if ($conn->connect_error) 
{
    die("No hay conexion" .$conn->connect_error);
}
?>