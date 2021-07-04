<?php

include ("conexion.php");

$nombre = $_POST ["usuario"];
$pass = $_POST ["pass"];

//login
if(isset($_POST["btiningresas"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WERE usuario='$nombre' AND password='$pass'");    
    $nr = mysql_num_rows($query);

    if ($nr== 1)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='principal.html' </script>";
    }else
    {
        echo "<script> alert('Usuario no exite'); window.location='index.html' </script>";
    }
}

//Registarse
if (isset($_POST["btnregistrar"])) 
{
    $sqlgrabar = "INSERT INTO login (usuario,password) VALUES ('$nombre','$pass')";

    if (mysqli_query($conn,$sqlgrabar)) 
    {
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html'</script>";
    }else 
    {
        echo "Error: ".$sql."<br>".mysql_error($conn);
    }
}

?>