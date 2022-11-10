/*021truncateText.js/.html: Crea una función truncate(str, maxlength) que verifique la 
longitud de str y, si excede maxlength – reemplaza el final de str con el carácter de 
puntos suspensivos "...", para hacer su longitud igual a maxlength. El resultado de la 
función debe ser la cadena truncada (si es necesario). Por ejemplo:
truncate("Lo que me gustaría contar sobre este tema es:", 20) = "Lo que me gustaría 
c..."
truncate("Hola a todos!", 20) = "Hola a todos!"*/
"use strict";

alert(truncate("Lo que me gustaría contar sobre este tema es:", 20));
alert(truncate("Hola a todos!", 20));

function truncate(str, maxlength) {
    let newStr = str.length > maxlength ? str.slice(0, maxlength) + "..." : str;

    return newStr;
}
