/*025usingArrayDisney.js/.html: Ejecuta sobre el siguiente array las operaciones pedidas:*/
"use strict";

let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" },
];

//? Meter a Peter Pan al final del array disney.
disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan" });
console.log(disney);

//? Pintar el array
for (let key of disney) {
    document.write("Nombre: " + key.nombre + " Película: " + key.pelicula + "<br>");
}

//? Meter a El capitán Garfio al principio del array, no olvides la película
disney.unshift({ nombre: "El capitán Garfio", pelicula: "Peter Pan" });
console.log(disney);

//? Meter al cocodrilo detrás del capitán, no olvides la película
disney.splice(1, undefined, { nombre: "Cocodrilo", pelicula: "Peter Pan" });
console.log(disney);

//? Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno a uno.
let pelisPeterPan = disney.reduce((arr, value) => {
    if (value.pelicula === "Peter Pan") arr.push(value);
    return arr;
}, []);

document.write("<br>Personajes de la película Peter Pan<br>");

for (let key of pelisPeterPan) {
    document.write(key.nombre + "<br>");
}

//? Encontrar el índice de Campanilla.
disney.reduce((arr, value, i) => {
    if (value.nombre === "Campanilla") {
        document.write("<br>El índice de " + value.nombre + " es: " + i + "<br>");
    }
}, []);

//? Buscar al cocodrilo.
disney.reduce((arr, value, i) => {
    if (value.nombre === "Cocodrilo") {
        document.write("<br>" + value.nombre + " ha sido encontrado en el índice: " + i + "<br>");
    }
}, []);

//? Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los elementos del array.
function shuffle(arr) {
    /* Math.random multiplicado por 0.5 nos dará un valor entre -0.5 y 0.5,
      si el valor es positivo el primer elemento se colocará antes del segundo,
      si es negativo se colocará después del segundo elemento*/
    return arr.sort(() => Math.random() - 0.5);
}

shuffle(disney);

document.write("<br>Prueba del Shuffle<br>");
for (let key of disney) {
    document.write("Nombre: " + key.nombre + " Película: " + key.pelicula + "<br>");
}
