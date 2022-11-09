/*014fixNumbers.js/.html: ¿Por qué 6.35.toFixed(1) == 6.3? Según la documentación 
Math.round y toFixed redondean al número más cercano: 0..4 hacia abajo mientras 
5..9 hacia arriba. Por ejemplo:  alert( 1.35.toFixed(1) ); // 1.4
En el ejemplo similar que sigue, ¿por qué 6.35 es redondeado a 6.3, y no a 6.4?
alert( 6.35.toFixed(1) ); // 6.3
¿Cómo redondear 6.35 de manera correcta?*/
"use strict";

//* Para redondear a la cifra siguiente debe ser el número posterior superior a 5, de lo contrario redondeará a hacia abajo
alert((6.35).toFixed(1)); //* Redondea a 6.3
alert((6.36).toFixed(1)); //* Redondea a 6.4

//* Para conseguir redondearlo podríamos multiplicarlo por 10 y después de redondear dividirlo entre 10.
alert((6.35 * 10).toFixed(0) / 10);
