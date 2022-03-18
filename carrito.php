<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['username'];

include('config/database.php');

$sql= "SELECT id, nombre, precio FROM libros WHERE activo=1";
$resultado = $conn->prepare($sql);
$resultado->execute();

$resultado->setFetchMode(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong>Libreria</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="catalogo.php" class="nav-link">Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contacto</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav d-flex justify-content-end">
                        <?php

                            if(isset($usuario)){
                                echo '<li> <a href="#" class="nav-link">Carrito</a></li>';
                                echo '<li> <a href="#" class="nav-link">'. $usuario .'</a></li>';
                                echo '<li> <a href="config/salir.php" class="nav-link">Desconectar</a></li>';
                            } else{
                                echo '<li> <a href="registro.php" class="nav-link">Crear cuenta</a></li>';
                                echo '<li> <a href="login.php" class="nav-link">Log in</a></li>';
                            }
                        ?>
                    </ul>


                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>