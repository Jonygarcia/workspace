/*026fibonnacci.js/.html: Crear un array que contenga los 20 primeros números de 
Fibonacci.*/
"use strict";

const fibonacci = [0, 1];

for (let i = 2; i < 20; i++) {
    fibonacci.push(fibonacci[i - 1] + fibonacci[i - 2]);
}

console.log(fibonacci);
