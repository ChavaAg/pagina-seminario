<?php

    include('database.php');

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'and password ='$password'";
    $resultado = $conn->prepare($sql);
    $resultado->execute();

    $row = $resultado->fetch();
    if($row['username'] == $username && $row['password'] == $password){
        $_SESSION['username'] = $username;
        header('Location: ../index.php');
    }else{
        header('Location: ../login.php');
    }

?>