<?php
session_start();

require 'Config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$apellido = $conn->real_escape_string($_POST['apellido']);
$especialidad = $conn->real_escape_string($_POST['especialidad']);

$sql = "INSERT INTO paciente (nombre, apellido, id_especialidad, fecha)
VALUES ('$nombre', '$apellido', $especialidad, NOW())";
if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";
}

header('Location: index.php');