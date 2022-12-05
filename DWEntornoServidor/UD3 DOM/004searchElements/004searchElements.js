/*004searchElements.html/.js:Aquí está el documento con la tabla y el formulario.
¿Cómo encontrar?...*/
"use strict";

//? La tabla con id="age-table".

console.log(document.getElementById("age-table"));

//? Todos los elementos label dentro de la tabla (debería haber 3).

console.log(document.querySelectorAll("#age-table label"));

//? El primer td en la tabla (con la palabra “Age”).

console.log(document.getElementsByTagName('td')[0]);

//? El form con name="search".

console.log(document.getElementsByName("search")[0]);

let form = document.getElementsByName("search")[0];

//? El primer input en ese formulario.

console.log(form.getElementsByTagName("input")[0]);

//? El último input en ese formulario.

console.log(form.getElementsByTagName("input")[form.childElementCount - 1]);
