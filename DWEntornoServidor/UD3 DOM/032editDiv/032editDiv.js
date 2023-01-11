/*032editDiv.html/.js: Crea un <div> que se vuelva <textarea> cuando es clicado.
El textarea permite editar HTML en <div>. Cuando el usuario presiona Enter o se pierde 
el foco, el <textarea> se vuelve <div> de nuevo, y su contenido se vuelve el HTML del 
<div>.*/
"use strict";

let divText = document.getElementById("divText");
let areaText;

divText.onclick = function () {
    areaText = document.createElement("textarea");
    areaText.id = "areaText";
    areaText.classList = "form-control w-25";
    areaText.value = divText.innerHTML;

    divText.replaceWith(areaText);

    areaText.focus();

    areaText.onkeydown = function (event) {
        if (event.key == "Enter") {
            closeAreaText();
        }
    };

    areaText.onblur = () => closeAreaText();
};

function closeAreaText() {
    divText.innerHTML = areaText.value;
    areaText.replaceWith(divText);
}
