<?php
include('config/database.php');

if (count($_POST) > 0) {
    //var_dump($_POST['nombre']);

    $nombre = $_POST['nombre'];
    $username = $_POST['username'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (nombre,username,correo,password) VALUES ('$nombre','$username','$correo','$password')";
    $conn->exec($sql);
}

header('Location: index.php');
?>