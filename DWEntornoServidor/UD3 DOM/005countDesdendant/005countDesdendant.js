/*005countDesdendant.html/.js: Hay un árbol estructurado como ul/li anidado.
Escribe el código que para cada <li> muestra:
¿Cuál es el texto dentro de él (sin el subárbol)?
El número de <li> anidados: todos los descendientes, incluidos los profundamente 
anidados.*/
"use strict";

let li = document.querySelectorAll("li");

for (const iterator of li) {
    console.log(iterator.innerHTML);
}