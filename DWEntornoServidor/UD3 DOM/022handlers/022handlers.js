/* Hay un botón en la variable. No hay handlers en él. */
"use strict";

let button = document.getElementById("btn");

//? ¿Qué handlers se ejecutan con el click después del siguiente código? ¿Qué alertas se muestran?
//* Ambos casos se ejecutan tantas veces como se haga click en el botón.

button.addEventListener("click", () => alert("1"));
button.removeEventListener("click", () => alert("1"));
/* 
 * El removeEventListener no está eliminando el eventListener, ya que no hay ua función definida a
 * la que se esté dirigiendo, por tanto se sigue ejecutando cada vez que se haga click en el botón.
 */

button.onclick = () => alert(2);
//* El button onclick siempre se ejecuta ya que es independiente de los métodos anteriores.
