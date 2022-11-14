/*035getSecondsToAfterTomorrow():  ¿Cuantos segundos faltan para el día de después 
de mañana? Crea una función getSecondsToAfterTomorrow() que devuelva la cantidad 
de segundos que faltan para el día después de mañana.
Por ejemplo, si ahora son las 23:00, entonces:
getSecondsToAfterTomorrow() == 3600 + todos los segundo de un día
P.D.: La función debe poder funcionar para cualquier día, sin valores fijos en el código”.*/
"use strict";

alert("Quedan " + getSecondsToAfterTomorrow() + " para el día después de mañana.");

function getSecondsToAfterTomorrow() {
    let fecha = new Date();

    let tiempo =
        86400 -
        (fecha.getHours() * 3600 + fecha.getMinutes() * 60 + fecha.getSeconds());

    return tiempo + 86400;
}
