<?php

require 'Config/database.php';

    $id = $conn->real_escape_string($_POST['id']);
    
    $sql = "DELETE FROM paciente WHERE id=$id";

    if ($conn->query($sql)) {
    }
    header('Location: index.php');