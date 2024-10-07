<?php

require 'Config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, apellido, id_especialidad, fecha FROM paciente WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$paciente = [];

if ($rows > 0) {
    $paciente = $resultado->fetch_array();
}

echo json_encode($paciente, JSON_UNESCAPED_UNICODE);