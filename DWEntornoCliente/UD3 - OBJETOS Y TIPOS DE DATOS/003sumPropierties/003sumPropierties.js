/*003sumProperties.js/.html: Tenemos un objeto que almacena los salarios de nuestro 
equipo:
let salaries = {
  Harry: 100,
  Ron 160,
  Hermione: 130
}
Escribe el código para sumar todos los salarios y almacenar el resultado en la variable 
sum. En el ejemplo de arriba nos debería dar 390. Si salaries está vacío entonces el 
resultado será 0.*/
"use strict";

let sum;

let salaries = {
  Harry: 100,
  Ron: 160,
  Hermione: 130,
};

sum = sumarObj(salaries);

alert(sum);

function sumarObj(obj) {
  let suma = 0;

  if (Object.keys(obj).length === 0) {
    return 0;
  } else {
    for (let key in obj) {
      suma += obj[key];
    }
  }
  
  return suma;
}
