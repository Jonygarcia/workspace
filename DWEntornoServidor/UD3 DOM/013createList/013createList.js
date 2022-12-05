/*013createList.html/.js: Escribir una interfaz para crear una lista de lo que ingresa un 
usuario. Para cada item de la lista:
Preguntar al usuario acerca del contenido usando prompt.
Crear el <li> con ello y agregarlo a <ul>.
Continuar hasta que el usuario cancela el ingreso (presionando Esc o con un ingreso 
vacío).
Todos los elementos deben ser creados dinámicamente.
Si el usuario ingresa etiquetas HTML, deben ser tratadas como texto.*/
"use strict";

let ul = document.createElement("ul");
document.body.append(ul);
let askUser = true;

while (askUser) {
    let text = prompt("Introduzca un texto para agregarlo a la lista");

    if (!text) {
        askUser = false;
    } else {
        let li = document.createElement("li");
        li.innerHTML = text;
        ul.append(li);
    }
}
