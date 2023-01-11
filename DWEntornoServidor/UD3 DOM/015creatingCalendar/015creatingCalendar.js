/*015creatingCalendar.html/.js: Escribe una función createCalendar(elem, year, month).
Su llamado debe crear un calendario para el año y mes dados y ponerlo dentro de 
elem. El calendario debe ser una tabla, donde una semana es <tr>, y un día es<td>. Los 
encabezados de la tabla deben ser <th> con los nombres de los días de la semana: el 
primer día debe ser “lunes” y así hasta “domingo”. 
P.S. Para esta tarea es suficiente generar el calendario, no necesita aún ser pulsable.*/
"use strict";

createCalendar(calendar, 2022, 12);

function createCalendar(elem, year, month) {
    let fecha = new Date(year, month - 1);

    // Cabecera de la tabla
    let tabla = "<tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr><tr>";

    // Espacios en blanco en los días del mes anterior
    //! Enero de 2023 es el único que me descuadra, he probado varias formas de solucionarlo y no tengo ni idea del motivo,
    //! siempre me pinta un cuadro blanco de más y me deja el día 1 fuera del calendario.
    for (let i = 0; i < getDay(fecha); i++) {
        tabla += "<td></td>";
    }

    // Recorrer los días del mes, seteando en la fecha el siguiente día, cuando sea domingo saltar a la siguiente fila de la tabla
    while (fecha.getMonth() == month - 1) {
        tabla += "<td>" + fecha.getDate() + "</td>";

        if (getDay(fecha) == 7) {
            tabla += "</tr><tr>";
        }

        fecha.setDate(fecha.getDate() + 1);
    }

    // Espacios en blanco en los días del mes siguiente comprobando si es el último mes del año
    if (getDay(fecha) > 0 && month == 12) {
        fecha = new Date(year + 1, 0);
        for (let i = getDay(fecha); i <= 7; i++) {
            tabla += "<td></td>";
        }
    } else if (getDay(fecha) > 0) {
        for (let i = getDay(fecha); i < 7; i++) {
            tabla += "<td></td>";
        }
    }

    elem.innerHTML = tabla + "</tr>";
}

function getDay(fecha) {
    return fecha.getDay() == 0 ? 7 : fecha.getDay() - 1;
}
