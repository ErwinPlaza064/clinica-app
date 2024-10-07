// Selecciona los modales
let editaModal = document.getElementById("editaModal");
let eliminaModal = document.getElementById("eliminaModal");

// Abre el modal de edición y carga los datos del paciente
document
  .querySelectorAll('[data-modal-open="editaModal"]')
  .forEach((button) => {
    button.addEventListener("click", function (event) {
      // Obtener el ID del paciente desde el atributo data
      let id = button.getAttribute("data-id"); // Cambia 'data-id' según cómo lo establezcas en tu tabla

      let inputId = editaModal.querySelector("#id");
      let inputNombre = editaModal.querySelector("#nombre");
      let inputApellido = editaModal.querySelector("#apellido");
      let inputEspecialidad = editaModal.querySelector("#especialidad");
      let inputFecha = editaModal.querySelector("#fecha");

      // Realizar la solicitud para obtener los datos del paciente
      let url = "getPaciente.php";
      let formData = new FormData();
      formData.append("id", id);

      fetch(url, {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          // Llenar el formulario con los datos obtenidos
          inputId.value = data.id;
          inputNombre.value = data.nombre;
          inputApellido.value = data.apellido;
          inputEspecialidad.value = data.id_especialidad;
          inputFecha.value = data.fecha;

          // Mostrar el modal (simulando el comportamiento de Bootstrap)
          editaModal.style.display = "block";
        })
        .catch((err) => console.log(err));
    });
  });

// Abre el modal de eliminación y carga el ID del paciente
document
  .querySelectorAll('[data-modal-open="eliminaModal"]')
  .forEach((button) => {
    button.addEventListener("click", function (event) {
      let id = button.getAttribute("data-id"); // Cambia 'data-id' según cómo lo establezcas

      eliminaModal.querySelector("#id").value = id;

      // Mostrar el modal (simulando el comportamiento de Bootstrap)
      eliminaModal.style.display = "block";
    });
  });

// Cerrar los modales con botones .close-btn y .close-modal
document.querySelectorAll(".close-btn, .close-modal").forEach((button) => {
  button.addEventListener("click", function () {
    // Cierra el modal al hacer clic en el botón de cierre
    this.closest(".modal").style.display = "none";
  });
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener("click", function (event) {
  if (event.target.classList.contains("modal")) {
    event.target.style.display = "none";
  }
});
