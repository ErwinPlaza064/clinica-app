document.addEventListener("DOMContentLoaded", function () {
  const pacienteLink = document.getElementById("paciente");
  const mainContent = document.querySelector("main");
  const torreLink = document.getElementById("torre");
  const section = document.querySelector("section");

  torreLink.addEventListener("click", function (event) {
    event.preventDefault();

    // Ocultar el contenido del main cuando se hace clic en "Torre"
    mainContent.style.display = "none";
    section.style.display = "block";
  });

  // Evento al hacer clic en "Paciente"
  pacienteLink.addEventListener("click", function (event) {
    event.preventDefault();

    // Mostrar el contenido del main cuando se hace clic en "Paciente"
    mainContent.style.display = "block";
    section.style.display = "none";
  });
});
