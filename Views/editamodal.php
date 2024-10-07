<div class="modal" id="editaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="editaModalLabel">Editar Paciente</h1>
        <button type="button" class="close-btn">X</button>
      </div>
      <div class="modal-body">
        <form action="actualiza.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" id="id" name="id">

          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
          </div>

          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
          </div>

          <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <select name="especialidad" id="especialidad" required>
              <option value="">Seleccionar...</option>
              <?php while ($row_especialidad = $especialidades->fetch_assoc()) { ?>
                <option value="<?php echo $row_especialidad["id"]; ?>"><?= $row_especialidad["nombre"] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="fecha">Fecha De Alta:</label>
            <input type="date" name="fecha" id="fecha" required>
          </div>

          <div class="form-group">
            <button type="button" class="close-modal" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="save-btn">Guardar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

