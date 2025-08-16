document.addEventListener("DOMContentLoaded", () => {
  const statusText = document.getElementById("statusText");
  const statusIcon = document.getElementById("statusIcon");
  const sessionTime = document.getElementById("sessionTime");
  let idleTimer;

  // Obtener la última sesión guardada (antes de actualizarla)
  const ultimaSesionAnterior = localStorage.getItem("ultimaSesionAdmin");
  if (ultimaSesionAnterior) {
    sessionTime.textContent = ultimaSesionAnterior;
  } else {
    sessionTime.textContent = "Primera vez";
  }

  // Guardar nueva fecha actual como "última sesión"
  const ahora = new Date();
  const nuevaFecha = ahora.toLocaleString("es-CO", {
    dateStyle: "short",
    timeStyle: "short"
  });
  localStorage.setItem("ultimaSesionAdmin", nuevaFecha);

  // Función para cambiar estado visual
  function updateStatus(status) {
    statusText.textContent = status;

    statusIcon.classList.remove("online", "away");
    statusIcon.classList.remove("zmdi-check-circle", "zmdi-time-restore");
    
    if (status === "Disponible") {
      statusIcon.classList.add("zmdi-check-circle", "online");
    } else if (status === "Ausente") {
      statusIcon.classList.add("zmdi-time-restore", "away");
    }
  }

  // Función de inactividad
  function startIdleTimer() {
    clearTimeout(idleTimer);
    idleTimer = setTimeout(() => updateStatus("Ausente"), 1 * 60 * 1000);
  }

  ["mousemove", "keydown", "click"].forEach(event => {
    document.addEventListener(event, () => {
      if (statusText.textContent === "Ausente") updateStatus("Disponible");
      startIdleTimer();
    });
  });

  // Estado inicial
  updateStatus("Disponible");
  startIdleTimer();
});
