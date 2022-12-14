<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        
        header("location: login.php");

        session_destroy();
        die();
        
    }
    
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="style.css">
<title>Document</title>
</head>
<body>
    <div class="container">

        <a href="php/cerrar_sesion.php">Cerrar sesion</a>

        <h2>Agenda de contactos</h2>

        <div class="formulario-datos">
            <input type="text" class = "nombre" placeholder="nombre">
            <input type="text" class = "numero" placeholder="numero">
            <input type="text" class = "direccion" placeholder="direccion">
            <button class="btn-agregar-tareas">Agregar tareas</button>
       
        <div class="listado-tarea">
            <div class="tareas">
                <h3>Nombre</h3>
                <p>Numero</p>
                <p>Direccion</p>
                <span class="material-symbols-outlined icono">
                    delete_forever
                    </span>
            </div>
        </div>
        </div> 
    </div>
    <script src="funciones.js"></script>
    <script src="main.js"></script>
</body>
</html>