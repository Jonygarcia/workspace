/*005countDesdendant.html/.js: Hay un árbol estructurado como ul/li anidado.
Escribe el código que para cada <li> muestra:
¿Cuál es el texto dentro de él (sin el subárbol)?
El número de <li> anidados: todos los descendientes, incluidos los profundamente 
anidados.*/
"use strict";

let elementos = document.querySelectorAll("li");

for (const li of elementos) {

    let tipo = li.firstChild.data;
    let cantidad = li.getElementsByTagName("li").length;

    tipo = tipo.trim();

    console.log(tipo + ": " + cantidad);
}