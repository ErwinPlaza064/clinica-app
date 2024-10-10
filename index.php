<?php  
require 'Config/database.php';

$sqlPacientes = "SELECT p.id, p.nombre, p.apellido, p.fecha, g.nombre AS especialidad FROM paciente AS p
INNER JOIN especialidad AS g ON p.id_especialidad=g.id";

$pacientes = $conn->query($sqlPacientes);

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style/style_index.css" />
    <link rel="shortcut icon" href="Assets/favicon.png" type="image/x-icon" />
    <title>Clinica</title>
  </head>
  <body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>
    <div class="barra-lateral">
    <div>
      <div class="nombre-pagina">
        <ion-icon id="hospital" name="git-network-outline"></ion-icon>
        <span>Administrador</span>
      </div>
      <span class="line-top"></span>
    </div>
      <nav class="navegacion">
        <ul>
        <li>
            <a id="torre" class="torrem">
            <ion-icon name="bag-add-outline"></ion-icon>
              <span>TorreMedica</span>
              
            </a>
          </li>
          <li>
            <a id="paciente"href="#">
              <ion-icon name="person-outline"></ion-icon>
              <span>Pacientes</span>
              
            </a>
          </li>
          <li>
            <a>
            <ion-icon name="walk-outline"></ion-icon>
              <span>Doctores</span>
              
            </a>
          </li>
        </ul>
        <span class="line-bottom"></span>
      </nav>

     <div>
            <div class="propietario">
        <img src="Img/logo.png" alt="Torre_Medica"> 
     </div>
     </div>
    </div>
    
  
    <h1 style="text-align: center; margin-left:200px; padding: 250px;">Bienvenido a la clinica</h1>

    <main style="display: none;">
    <div class="container">
    <div>
    <a href="#" class="btn" data-modal-open="nuevoModal">Nuevo Paciente</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>
                <th>Fecha De Alta</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row_paciente = $pacientes->fetch_assoc()) { ?>
            <tr>
                <td><?= $row_paciente['id']; ?></td>
                <td><?= $row_paciente['nombre']; ?></td>
                <td><?= $row_paciente['apellido']; ?></td>
                <td><?= $row_paciente['especialidad']; ?></td>
                <td><?= $row_paciente['fecha']; ?></td>
                <td>
                <a href="#" class="btn btn-primary" data-id="<?= $row_paciente['id']; ?>" data-modal-open="editaModal">Editar</a>
                <a href="#" class="btn btn-danger" data-id="<?= $row_paciente['id']; ?>" data-modal-open="eliminaModal">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php 
            $sqlEspecialidad = "SELECT id,nombre FROM especialidad";
            $especialidades = $conn->query($sqlEspecialidad);
            ?>
            
            <?php
              if (file_exists('nuevomodal.php')) {
              include 'nuevomodal.php';
              } else {
              echo "El archivo nuevomodal.php no se encuentra.";
            }
            ?>

            <?php $especialidades->data_seek(0); ?>
            
            <?php
              if (file_exists('editamodal.php')) {
              include 'editamodal.php';
              } else {
              echo "El archivo editamodal.php no se encuentra.";
            }
            ?>
             <?php
              if (file_exists('eliminamodal.php')) {
              include 'eliminamodal.php';
              } else {
              echo "El archivo eliminamodal.php no se encuentra.";
            }
            ?>
        


    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="Js/ScriptM.js"></script>
    <script src="Js/Modales.js"></script>
    <script src="Js/Script.js"></script>
    <script src="Js/Style.js"></script>
  </body>
</html>
