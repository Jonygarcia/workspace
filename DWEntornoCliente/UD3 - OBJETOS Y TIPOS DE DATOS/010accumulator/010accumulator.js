/*010accumulator.js/.html:  Crear una función constructor Accumulator(startingValue).
El objeto que crea debería:  Almacenar el “valor actual” en la propiedad value. El valor 
inicial se establece en el argumento del constructor startingValue.
El método read() debe usar prompt para leer un nuevo número y agregarlo a value.
En otras palabras, la propiedad value es la suma de todos los valores ingresados por el 
usuario con el valor inicial startingValue.*/
"use strict";

let acumulador = new Accumulator(5);

alert(acumulador.value);

acumulador.read();

alert(acumulador.value);


function Accumulator(startingValue) {
    this.value = startingValue;

    this.read = function () {
        this.value += +prompt("Introduzca un nuevo número para sumarlo");
    };
}
