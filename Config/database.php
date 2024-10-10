<?php

$conn = new mysqli("localhost","root","","clinica_db");
if ($conn->connect_error) 
{
    die("Error De Conexion" . $conn->connect_error);
}