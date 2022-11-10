/*024usingArrayFruits.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:*/
"use strict";

let fruits = ["Banana", "Manzana", "Fresa"];

//? Añadimos cereza al principio
fruits.unshift("Cereza"); // ['Cereza', 'Banana', 'Manzana', 'Fresa']
console.log(fruits);

//? Añadimos melocotón al final
fruits.push("Melocotón"); // ['Cereza', 'Banana', 'Manzana', 'Fresa', 'Melocotón']
console.log(fruits);

//? Mostrar el array elemento a elemento con for clásico
for (let i = 0; i < fruits.length; i++) {
    alert(fruits[i]);
}

//? Eliminamos el primer elemento.
fruits.shift(); // ['Banana', 'Manzana', 'Fresa', 'Melocotón']
console.log(fruits);

//? Eliminamos el último elemento.
fruits.pop(); // ['Banana', 'Manzana', 'Fresa']
console.log(fruits);

//? Mostrar cada elemento con for of o for in, lo que considere más adecuado.
for (let fruit of fruits) {
    alert(fruit);
}
//!  El bucle for in está optimizado para objetos genéricos no para arrays, por tanto es más lento y no debemos usarlo
