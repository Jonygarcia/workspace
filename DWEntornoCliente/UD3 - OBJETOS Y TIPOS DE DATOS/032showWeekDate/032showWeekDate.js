/*032showWeekDate.js/.html: Muestra en pantalla un día de la semana Escribe una 
función getWeekDay(date) para mostrar el día de la semana en formato corto: ‘MO’, 
‘TU’, ‘WE’, ‘TH’, ‘FR’, ‘SA’, ‘SU’.
Por ejemplo:
let date = new Date(2012, 0, 3);  // 3 Jan 2012
alert( getWeekDay(date) );        // debería mostrar "TU"*/
"use strict";

let date = new Date(2012, 0, 3);

alert(getWeekDay(date));

function getWeekDay(date) {
    switch (date.getDay()) {
        case 0:
            return "SU";
        case 1:
            return "MO";
        case 2:
            return "TU";
        case 3:
            return "WE";
        case 4:
            return "TH";
        case 5:
            return "FR";
        case 6:
            return "SA";
    }
}
