/*036formatToRelative.js/.html: Cambia el formato a fecha relativa. Escribe una función 
formatDate(date) que muestre la fecha en el siguiente formato:
Si a partir de la fecha date pasó menos de 1 segundo, debe devolver "ahora mismo".
De no ser así, si a partir de la fecha date pasó menos de 1 minuto, debe retornar "hace 
n seg,".
De no ser así, si pasó menos de una hora, debe devolver "hace n min.".
De no ser así, debe retornar la fecha completa en el formato "DD.MM.AA HH:mm". Es 
decir: "día.mes.año horas:minutos", cada uno de ellos en formato de 2 dígitos, por ej. 
31.12.16 10:00.*/
"use strict";

let date = new Date("2022/05/10");

formatDate(date);

function formatDate(date) {
    //* Obtener los datos
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear().toString().slice(2);

    //* Obtener la diferencia de las fecha y tiempo.
    let difDate = new Date() - date;
    let difSecs = Math.round(difDate / 1000);
    let difMinutes = difSecs / 60;
    let difHours = difMinutes / 60;

    return difSecs < 1
        ? "Ahora mismo"
        : difMinutes < 1
            ? "Hace " + difSecs + " segundos"
            : difHours < 1
                ? "Hace " + difMinutes + " minutos"
                : "";
}
