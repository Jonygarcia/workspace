/*005makeUser.js/.html: Aquí la función makeUser devuelve un objeto. ¿Cuál es el 
resultado de acceder a su atributo ref? ¿Por qué?
function makeUser() {
  return {
    name: "John",
    ref: this
  };
}
let user = makeUser();
alert( user.ref.name ); // ¿Cuál es el resultado?*/
"use strict";

function makeUser() {
    return {
        name: "John",
        ref: this,
    };
}

let user = makeUser();
alert(user.ref.name);

//? ¿Cuál es el resultado de acceder a su atributo ref?¿Por qué?
//* El resultado de ref es undefined, ya que está queriendo acceder dentro de una función a un objeto que no ha sido definido como tal.
//* Para que funcionase deberíamos ponerlo como método.

//? ¿Cuál es el resultado?
//* El resultado es erróneo ya que está accediendo a la propiedad name dentro de un objeto no definido.