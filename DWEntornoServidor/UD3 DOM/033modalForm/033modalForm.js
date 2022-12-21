/*033modalForm.html/.js: Crea una función showPrompt(html, callback) que muestre un 
formulario con el mensaje html, un campo input y botones OK/CANCELAR.
Un usuario debe escribir algo en el campo de texto y pulsar Enter o el botón OK, 
entonces callback(value) es llamado con el valor introducido.
En caso contrario, si el usuario pulsa Esc o CANCELAR, entonces callback(null) es 
llamado. En ambos casos se finaliza el proceso se y borra el formulario. Requisitos:
El formulario debe estar en el centro de la ventana.
El formulario es modal. Es decir que no habrá interacción con el resto de la página, 
siempre que sea posible, hasta que el usuario lo cierre.
Cuando se muestra el formulario, el foco debe estar en el <input> del usuario.
Las teclas Tab/Shift+Tab deben alternar el foco entre los diferentes campos del 
formulario, no se permite cambiar el foco a otros elementos de la página.*/
"use strict";

document.getElementById("btn").onclick = () => {
    showPrompt("Escribe algo... inteligente :)", function (value) {
        alert(value);
    });
};

function showPrompt(html, callback) {
    putCover();

    document.addEventListener("keydown", function (event) {
        if (event.key == "Escape") cancelModal();
    });

    let modalDiv = document.getElementById("modalDiv");
    modalDiv.removeAttribute("hidden");
    document.getElementById("modalMsg").innerHTML = html;

    let userText = document.getElementById("text");
    userText.focus();

    document.getElementById("btnCancel").onclick = () => cancelModal();

    modalDiv.onsubmit = () => {
        if (userText.value == "") {
            alert("Debes escribir un mensaje para mostrarlo");
            return false;
        } else {
            removeCover();
            callback(userText.value);
        }
    };
}

function cancelModal() {
    document.getElementById("modalDiv").setAttribute("hidden", "true");
    removeCover();
}

function putCover() {
    let cover = document.createElement("div");
    cover.id = "cover-bg";
    document.body.append(cover);
}

function removeCover() {
    document.getElementById("cover-bg").remove();
}
