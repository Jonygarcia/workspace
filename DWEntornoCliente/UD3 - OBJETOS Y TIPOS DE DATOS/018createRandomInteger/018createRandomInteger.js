/*018createRandomInteger.js/.html: Crea una función randomInteger(min, max) que 
genere un número entero aleatorio entre min y max incluyendo ambos, min y max, 
como valores posibles. Todo número del intervalo min..max debe aparecer con la 
misma probabilidad. Ejemplos de funcionamiento:
alert( randomInteger(1, 5) ); // 1
alert( randomInteger(1, 5) ); // 3
alert( randomInteger(1, 5) ); // 5*/
"use strict";

alert(random(1, 5));

function random(min, max) {
    let rand = min + Math.random() * (max - min);
    return Math.round(rand);
}
