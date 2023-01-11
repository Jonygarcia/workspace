/*001children.html/.js Mira esta página:
Para cada una de las siguientes preguntas, da al menos una forma de cómo acceder a 
ellos:
¿El nodo <div> del DOM?
¿El nodo <ul> del DOM?
¿El segundo <li> (con Peter Parker)? */

"use strict";

//? ¿El nodo <div> del DOM?

console.log(document.body.children[0]);

//? ¿El nodo <ul> del DOM?

console.log(document.body.children[1]);

//? ¿El segundo <li> (con Peter Parker)?

console.log(document.body.children[1].lastElementChild);
