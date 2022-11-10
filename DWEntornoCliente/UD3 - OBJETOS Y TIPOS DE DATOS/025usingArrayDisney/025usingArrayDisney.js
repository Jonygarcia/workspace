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
disney.unshift({nombre: "El capitán Garfio", pelicula: "Peter Pan"});
console.log(disney);

//? Meter al cocodrilo detrás del capitán, no olvides la película


//Obtener los personajes de la película de "Peter Pan"; y mostrarlos uno a uno.
//Encontrar el índice de Campanilla.
//Buscar al cocodrilo.
//Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los elementos del array.
