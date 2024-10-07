<div class="modal" id="eliminaModal">
  <div class="modal-dialog modal-small">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="eliminaModalLabel">Aviso</h1>
        <button type="button" class="close-btn" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        ¿Deseas Eliminar el Paciente?
      </div>
      <div class="modal-footer">
        <form action="elimina.php" method="post">
          <input type="hidden" name="id" id="id">
          <button type="button" class="close-modal">Cerrar</button>
          <button type="submit" class="delete-btn">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
