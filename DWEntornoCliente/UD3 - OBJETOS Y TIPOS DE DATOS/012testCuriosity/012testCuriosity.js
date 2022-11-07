/*012testCuriosity.js/.html: Prueba ejecutando esto:
alert( 9999999999999999 );
¿Qué está pasando?¿Por qué?*/
"use strict";

alert(9999999999999999);

//? ¿Qué está pasando?¿Por qué?
//* Muestra 10000000000000000 al igual que nos ocurría el año pasado con Java, 
//* redondea el número automáticamente al superar la cantidad de bits disponibles 
//* para almacenar la información.
