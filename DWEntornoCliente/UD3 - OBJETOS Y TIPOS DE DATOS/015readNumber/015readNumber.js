/*015readNumber.js/.html: Crea una función readNumber que pida un número hasta 
que el visitante ingrese un valor numérico válido. El valor resultante debe ser devuelto 
como number. El visitante puede también detener el proceso ingresando una línea 
vacía o presionando “CANCEL”. En tal caso la función debe devolver null.*/
"use strict";

alert(readNumber());

function readNumber(){
    let num;

    do{
        num = +prompt("Introduce un número");

        if (num == null || num == "") return null;
    } while (!isFinite(num));

    return num;
}