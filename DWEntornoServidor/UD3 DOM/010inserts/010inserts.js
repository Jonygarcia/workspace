/*010inserts.html/.js: createTextNode vs innerHTML vs textContent: Tenemos un 
elemento DOM vacio elem y un string text.*/
"use strict";

let elem = document.getElementById("elem");
let text = "Hola que tal";

elem.append(document.createTextNode(text));
elem.innerHTML = text;
elem.textContent = text;

console.log(document.body.firstElementChild);

//? ¿Cuáles de estos 3 comandos harán exactamente lo mismo?
//* Los 3 comandos insertan el texto dentro del div que tenemos creado como textContent.
