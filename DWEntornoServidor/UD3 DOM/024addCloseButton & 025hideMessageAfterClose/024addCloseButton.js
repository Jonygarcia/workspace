/*
024addCloseButton.html/.js: Agregar un botón de cierre: Hay una lista de mensajes.
Usa JavaScript para agregar un botón de cierre en la esquina superior derecha de cada 
mensaje.

025hideMessajeAfterClose.html/.js: Dale funcionalidad al botón de cierre que has 
creado para la lista de mensajes del ejercicio anterior. Es decir, haz que funcionen. 
*/
"use strict";

let animals = document.querySelectorAll(".animal");

for (const animal of animals) {
    animal.insertAdjacentHTML("beforeend", "<button class='btn h-25 w-0 p-0'><i class='bi bi-x-lg'></i></button>");
    animal.lastChild.onclick = () => animal.remove();
}
