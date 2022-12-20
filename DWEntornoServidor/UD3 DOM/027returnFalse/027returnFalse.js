/*027returnFalse.html/.js:¿Por qué en el código de abajo return false no funciona?*/
"use strict";

function handler() {
    alert("...");
    return false;
}

//* El alert no debería estar en la función ya que rompe el árbol de eventos y no se ejecuta correctamente.

