/*002siblings.html/.js: Si elem – es un elemento nodo arbitrario del DOM...
¿Es cierto que elem.lastChild.nextSibling siempre es null?
¿Es cierto que elem.children[0].previousSibling siempre es null ?
Demúestralo.*/
"use strict";

let elem = document.body.children[0];

//? ¿Es cierto que elem.lastChild.nextSibling siempre es null?

console.log(elem.lastChild.nextSibling);
//* El resultado es nulo ya que no puede tener una etiqueta hermana siguiente si es el último elemento.

//? ¿Es cierto que elem.children[0].previousSibling siempre es null?

console.log(elem.children[0].previousSibling);
//* El resultado no es nulo, aunque da un error, el hijo 0 puede tener nodos anteriores a él como los nodos de texto
