<?php

$conn = new mysqli("localhost","adminsql","1234","clinica_db");
if ($conn->connect_error) 
{
    die("Error De Conexion" . $conn->connect_error);
}