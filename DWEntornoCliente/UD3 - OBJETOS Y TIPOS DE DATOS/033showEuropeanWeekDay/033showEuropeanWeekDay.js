/*033showEuropeanWeekDay.js/.html: En los países europeos se cuentan los días de la 
semana a partir del lunes (número 1), seguido del martes (número 2), hasta el 
domingo (número 7). Escribe una función getLocalDay(date) que devuelva el día de la 
semana “europeo” para la variable date. let date = new Date(2012, 0, 3);  // 3 Jan 2012
alert( getLocalDay(date) ); // tuesday, should show 2
Una vez lo obtengas, tradúcelo a español.*/
"use strict";

let date = new Date(2012, 0, 3);

alert( getLocalDay(date) );

function getLocalDay(date){
    let day = date.getDay();

    day = day === 0 ? 7 : day;

    switch (day) {
        case 1:
            return "Lunes, " + day;
        case 2:
            return "Martes, " + day;
        case 3:
            return "Miércoles, " + day;
        case 4:
            return "Jueves, " + day;
        case 5:
            return "Viernes, " + day;
        case 6:
            return "Sábado, " + day;
        case 7:
            return "Domingo, " + day;
    }
}