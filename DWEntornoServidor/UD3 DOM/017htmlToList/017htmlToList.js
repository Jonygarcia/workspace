/*017htmlToList.html/.js: Inserta el HTML en la lista. Escribe el código para insertar 
<li>2</li><li>3</li> entre dos <li>*/
"use strict";

let one = document.getElementById("one");
one.insertAdjacentHTML("afterend", "<li>2</li><li>3</li>");
