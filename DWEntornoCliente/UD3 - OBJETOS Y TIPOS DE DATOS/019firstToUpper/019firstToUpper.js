/*019firstToUpper.js/.html: Escribe una función ucFirst(str) que devuelva el string str con 
el primer carácter en mayúscula, por ejemplo:
ucFirst("john") == "John";*/
"use strict";

let cadena = prompt("Introduzca una cadena de texto");

alert(ucFirst(cadena));

function ucFirst(str) {
    let newstr;

    for (let i = 0; i < str.length; i++) {
        i == 0 ? (newstr = str[0].toUpperCase()) : (newstr += str[i]);
    }

    return newstr;
}
