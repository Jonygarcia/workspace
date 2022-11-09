/*020checkSpan.js/.html: Escribe una función checkSpam(str) que devuelva true si str 
contiene ‘viagra’ o ‘XXX’, de lo contrario false. La función debe ser insensible a 
mayúsculas y minúsculas:
checkSpam('compra ViAgRA ahora') == true
checkSpam('xxxxx gratis') == true
checkSpam("coneja inocente") == false*/
"use strict";

alert(checkSpam("compra ViAgRA ahora"));
alert(checkSpam("xxxxx gratis"));
alert(checkSpam("coneja inocente"));

function checkSpam(str) {
    let cadena = str.toLowerCase();

    return cadena.includes("viagra") || cadena.includes("xxx") ? true : false;
}
