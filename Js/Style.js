document.addEventListener("DOMContentLoaded", function () {
  const pacienteLink = document.getElementById("paciente");
  const mainContent = document.querySelector("main");
  const torreLink = document.getElementById("torre");
  const h1 = document.querySelector("h1");

  torreLink.addEventListener("click", function (event) {
    event.preventDefault();

    // Ocultar el contenido del main cuando se hace clic en "Torre"
    mainContent.style.display = "none";
    h1.style.display = "block";
  });

  // Evento al hacer clic en "Paciente"
  pacienteLink.addEventListener("click", function (event) {
    event.preventDefault();

    // Mostrar el contenido del main cuando se hace clic en "Paciente"
    mainContent.style.display = "block";
    h1.style.display = "none";
  });
});
