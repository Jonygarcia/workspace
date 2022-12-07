/*019notify.html/.js/.css: Escribir una función showNotification(options) que cree una 
notificación: <div class="notification"> con el contenido dado. La notificación debería 
desaparecer automáticamente después de 1.5 segundos. */
"use strict";

function showNotification({ html, top = 0, right = 0, className = "" }) {

    let divNotification = document.createElement("div");

    divNotification.className = "notification";

    if (className) divNotification.classList.add(className);

    divNotification.style.setProperty("top", top + "px");
    divNotification.style.setProperty("right", right + "px");

    divNotification.innerHTML = html;

    document.body.append(divNotification);

    setTimeout(() => divNotification.remove(), 1500);
}

showNotification({
    top: 10, // 10px desde la parte superior de la ventana (por defecto es 0px)
    right: 10, // 10px desde el borde derecho de la ventana (por defecto es 0px)
    html: "Hello!", // el HTML de la notificación
    className: "welcome" // una clase adicional para el "div" (opcional)
});

