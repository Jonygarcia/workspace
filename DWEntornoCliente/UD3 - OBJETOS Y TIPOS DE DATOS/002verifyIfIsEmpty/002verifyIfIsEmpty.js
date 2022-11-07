/*002verifyIfIsEmpty.js/.html: Escribe la función isEmpty(obj) que devuelva el valor true 
si el objeto no tiene propiedades, en caso contrario false. Debería funcionar así:
let schedule = {};
alert( isEmpty(schedule) ); // true
schedule["8:30"] = "Hora de levantarse";
alert( isEmpty(schedule) ); // false*/
"use strict";

let schedule = {};

alert(isEmpty(schedule)); // true

schedule["8:30"] = "Hora de levantarse";

alert(isEmpty(schedule)); // false


function isEmpty(objeto) {
    return (Object.keys(objeto).length === 0) ? true : false;
}
