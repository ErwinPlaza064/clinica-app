<?php

require 'Config/database.php';

    $id = $conn->real_escape_string($_POST['id']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $especialidad = $conn->real_escape_string($_POST['especialidad']);
    $fecha = $conn->real_escape_string($_POST['fecha']);
    
    $sql = "UPDATE paciente SET nombre='$nombre', apellido='$apellido', id_especialidad=$especialidad, fecha = '$fecha' WHERE id=$id";

    if ($conn->query($sql)) {

    }
    header('Location: index.php');