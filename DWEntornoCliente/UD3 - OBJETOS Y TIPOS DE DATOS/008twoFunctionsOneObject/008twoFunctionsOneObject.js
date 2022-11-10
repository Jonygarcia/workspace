/*008twoFunctionsOneObject.js/.html: ¿Es posible crear las funciones A y B para que se 
cumpla new A() == new B()?
function A() { ... }
function B() { ... }
let a = new A();
let b = new B();
alert( a == b ); // true
Si es posible, entonces proporcione un ejemplo de código.*/
"use strict";

//* Es posible creando el objeto previamente y devolviendo ese objeto en cada una de las funciones.
let objeto = {};

function A() {
  return objeto;
}
function B() {
  return objeto;
}

let a = new A();
let b = new B();

alert(a == b);
