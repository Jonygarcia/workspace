/*027transformSnakeToCamel.js/.html: Escribe la función camelize(str) que convierta 
palabras separadas por _como “mi_cadena_corta” en palabras con mayúscula 
“miCadenaCorta”. Esto sería: quitar todos los _ y que cada palabra después de _ 
comience con mayúscula. Ejemplos:
camelize("background_color") == 'backgroundColor';
camelize("list_style_image") == 'listStyleImage';
camelize("_webkit_transition") == 'WebkitTransition';
P.D. Pista: usa split para dividir el string en un array, transfórmalo y vuelve a unirlo 
(join).*/
"use strict";

document.write(camelize("background_color") + "<br>");
document.write(camelize("list_style_image") + "<br>");
document.write(camelize("_webkit_transition") + "<br>");

function camelize(str) {
    let letter = str.toLowerCase().split("");

    for (const i of letter) {
        if (i === "_") {
            let pos = letter.indexOf("_");
            letter[pos + 1] = letter[pos + 1].toUpperCase();
            letter[pos] = "";
        }
    }

    return letter.join("");
}
