/*029practiceWithBands.js/.html: Ejecuta sobre el siguiente array las operaciones 
pedidas:*/
"use strict";

let grupos = [
    { nombre: "ACDC", genero: "Rock" },
    { nombre: "Cold Play", genero: "Pop" },
    { nombre: "NCT Dream", genero: "K-Pop" },
    { nombre: "Metallica", genero: "Heavy Metal" },
];

//? Filtra los grupos por género obtenido aquellos que son de Heavy Metal.
let heavy = grupos.reduce((arr, value) => {
    if (value.genero === "Heavy Metal") arr.push(value.nombre);
    return arr;
}, []);

document.write("Grupos de Heavy Metal: " + heavy + "<br>");

//? Busca en los grupos usando “find” el grupo con Nombre “Cold Play”.
let coldPlay = grupos.find((value) => value.nombre == "Cold Play");

document.write("Nombre: " + coldPlay.nombre + " Género: " + coldPlay.genero + "<br>");

//? ¿En qué posición del array se encuenta “Cold Play”?
let indexColdPlay = grupos.findIndex((value) => value.nombre === "Cold Play");

document.write("Cold Play se encuentra en el índice: " + indexColdPlay);
