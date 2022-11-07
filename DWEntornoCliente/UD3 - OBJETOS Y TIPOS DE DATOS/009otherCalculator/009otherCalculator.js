/*009otherCalculator.js/.html: Crear una función constructora Calculator que crea 
objetos con 3 métodos:
read() pide dos valores usando prompt y los guarda en las propiedades del objeto con 
los nombres a y b.
sum() devuelve la suma de estas propiedades.
mul() devuelve el producto de la multiplicación de estas propiedades.
Por ejemplo:
let calculator = new Calculator();
calculator.read();
alert( "Sum=" + calculator.sum() );
alert( "Mul=" + calculator.mul() );*/
"use strict";

let calculator = new Calculator();
calculator.read();
alert("Sum=" + calculator.sum());
alert("Mul=" + calculator.mul());

function Calculator() {
    this.read = function () {
        this.a = +prompt("Introduzca el valor de a", 0);
        this.b = +prompt("Introduzca el valor de b", 0);
    };

    this.sum = function () {
        return this.a + this.b;
    };

    this.mul = function () {
        return this.a * this.b;
    };
}

//* A diferencia del ejercicio 006 debemos poner los métodos como funciones dentro de la función constructora
//* para que no nos ocurra lo mismo que en el ejercicio 005 y sí tengamos definidos todos los métodos del objeto en cuestión.
