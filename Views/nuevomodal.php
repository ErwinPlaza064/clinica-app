<div class="modal" id="nuevoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="nuevoModalLabel">Agregar Paciente</h1>
        <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="guarda.php" method="POST" enctype="multipart/form-data">
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
            <input type="date" id="fecha" required>
          </div>

          <div class="form-group">
            <button type="button" class="close-modal" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="save-btn">
              <i class="fa-solid fa-floppy-disk"></i> Guardar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>