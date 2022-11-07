/*001user.js/.html:  Escribe el código, una línea para cada acción:
Crea un objeto user vacío.
Agrega la propiedad name con el valor John Snow.
Agrega la propiedad surname con el valor Sam Sagaz.
Cambia el valor de name a Peter Pan.
Quita la propiedad name del objeto.*/
"use strict";

let user = {};

user.name = "John Snow";

user.surname = "Sam Sagaz";

user.name = "Peter Pan";

delete user.name;

// Para comprobar lo que ha quedado dentro del objeto
for (let key in user) {
    alert(user[key]);
}
