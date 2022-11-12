/*030arrayToObject.js/.html: Crea un objeto a partir de un array Supongamos que 
recibimos un array de personajes con la forma {id:..., nombre:..., pelicula:... }.
Crea una función groupById(arr) que cree un objeto, con id como clave (key) y los 
elementos del array como valores. Dicha función es realmente útil cuando trabajamos 
con información del servidor.
Para esta actividad asumimos que cada id es único. No existen dos elementos del array 
con el mismo id.
Usa el método de array .reduce en la solución.*/
"use strict";

let peliculas = [
    {id:"ESDLA001", nombre: "Frodo Bolsón", pelicula: "El Señor de los Anillos"},
    {id:"ESDLA002", nombre: "Samsagaz Gamyi", pelicula: "El Señor de los Anillos"},
    {id:"HP001", nombre: "Harry Potter", pelicula: "Harry Potter"},
    {id:"HP002", nombre: "Ron Weasley", pelicula: "Harry Potter"},
    {id:"HP003", nombre: "Hermione Granger", pelicula: "Harry Potter"}
];

console.log(groupById(peliculas));

function groupById(arr){
    return arr.reduce((obj, value) => {
        obj[value.id] = value;
        return obj;
      }, {})
}