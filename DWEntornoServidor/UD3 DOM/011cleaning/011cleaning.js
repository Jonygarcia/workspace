// 011cleaning.html/.js: Crea una función clear(elem) que remueva todo del elemento.
"use strict";

function clear(elem) {
    while (elem.firstChild) elem.firstChild.remove();
}

let elem = document.getElementById("elem");
clear(elem);
