// Función para abrir el modal
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.style.display = "block"; // Muestra el modal
}

// Función para cerrar el modal
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.style.display = "none"; // Oculta el modal
}

// Captura todos los botones que abren modales
document.querySelectorAll("[data-modal-open]").forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    const modalId = this.getAttribute("data-modal-open");
    openModal(modalId); // Abre el modal correspondiente
  });
});

// Cierra el modal cuando se hace clic fuera de él
window.onclick = function (event) {
  const modals = document.querySelectorAll(".modal");
  modals.forEach((modal) => {
    if (event.target === modal) {
      modal.style.display = "none"; // Cierra el modal si se hace clic afuera
    }
  });
};

document.querySelectorAll(".modal-close").forEach((button) => {
  button.addEventListener("click", function () {
    const modalId = this.getAttribute("data-modal-close");
    closeModal(modalId);
  });
});
