/*011addPropertyToString.js/.html: ¿Puedo agregar una propiedad a un string?: 
Considera el siguiente código:
let str = "Peter";
str.test = 5;
alert(str.test);
Qué piensas: ¿funcionará? ¿Qué mostrará? ¿Por qué?*/
"use strict";

let str = "Peter";
str.test = 5;
alert(str.test);

//? ¿Funcionará?
//* No funciona, nos indica la consola que no se puede crear una propiedad en un string,
//* por lo tanto, no muestra nada, aparece un mensaje de error.

//? ¿Por qué?
//* Una propiedad es un par clave valor, y un string almacena sólo una clave, nombre de la variable,
//* y un único valor, que es el contenido de esa variable, si quisiéramos tener más de una debemos crear
//* un array clave:valor o un objeto.
