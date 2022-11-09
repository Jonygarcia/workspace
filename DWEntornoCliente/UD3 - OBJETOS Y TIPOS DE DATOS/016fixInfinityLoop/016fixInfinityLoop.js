/*016fixInfinityLoop.js/.html: Este bucle es infinito. Nunca termina, ¿por qué?
let i = 0;
while (i != 10) {
  i += 0.2;
}*/
"use strict";

//* Nunca llega a ser 10 exactamente por pérdida de información al usar decimales, para corregirlo,
//* podríamos indicar que se ejecute el while mientras sea menor o igual a 10

let i = 0;

while (i <= 10) {
    i += 0.2;
}

alert(i);