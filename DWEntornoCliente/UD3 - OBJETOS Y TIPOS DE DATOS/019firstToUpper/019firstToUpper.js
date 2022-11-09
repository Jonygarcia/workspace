/*019firstToUpper.js/.html: Escribe una función ucFirst(str) que devuelva el string str con 
el primer carácter en mayúscula, por ejemplo:
ucFirst("john") == "John";*/
"use strict";

let cadena = prompt("Introduzca una cadena de texto");

alert(ucFirst(cadena));

function ucFirst(str) {
    if (str != "" || str != null) {
        return str[0].toUpperCase() + str.slice(1);
    } else return str;
}
