document.addEventListener("DOMContentLoaded", function () {
  const panelInbox = document.querySelector(".panel-inbox");


  window.seleccionarOpcion = function (opcion) {
    agregarMensajeUsuario(opcion);
    simularRespuestaBot(opcion);
  };

  function agregarMensajeUsuario(mensaje) {
    const msgDiv = document.createElement("div");
    msgDiv.classList.add("msg-chat", "user-message");

    const p = document.createElement("p");
    p.textContent = mensaje;

    msgDiv.appendChild(p);
    panelInbox.appendChild(msgDiv);
    panelInbox.scrollTop = panelInbox.scrollHeight;
  }

  function simularRespuestaBot(opcion) {
    const loadingDiv = document.createElement("div");
    loadingDiv.classList.add("msg-chat", "bot-typing");
    loadingDiv.innerHTML = "<p>Escribiendo...</p>";
    panelInbox.appendChild(loadingDiv);

    setTimeout(() => {
      fetch("dataset/consulta.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `opcion=${encodeURIComponent(opcion)}`,
      })
        .then((response) => response.json())
        .then((data) => {
          loadingDiv.remove();
          mostrarRespuestaBot(data.respuesta);
        })
        .catch((error) => {
          loadingDiv.remove();
          mostrarRespuestaBot("Error al obtener la respuesta. Intenta nuevamente.");
          console.error("Error:", error);
        });

    }, 2000);
    scrollToBottom();
  }


  function mostrarRespuestaBot(respuesta) {
    const msgDiv = document.createElement("div");
    msgDiv.classList.add("msg-chat", "bot-message");

    const p = document.createElement("p");
    p.textContent = respuesta;

    msgDiv.appendChild(p);
    panelInbox.appendChild(msgDiv);
    panelInbox.scrollTop = panelInbox.scrollHeight;
  }


  function scrollToBottom() {
    const panelText = document.getElementById('panel-text');
    panelText.scrollTop = panelText.scrollHeight;
  }


});
