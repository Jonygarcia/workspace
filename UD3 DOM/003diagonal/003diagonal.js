/*003diagonal.html/.js: Seleccionar todas las celdas diagonales Escribe el código para 
pintar todas las celdas diagonales de rojo. Necesitarás obtener todas las <td> de la 
<table> y pintarlas usando el código:
// td debe ser la referencia a la celda de la tabla
td.style.backgroundColor = 'red'; El resultado debe ser: */
"use strict";

let table = document.body.children[0];

for (let i = 0; i < table.rows.length; i++) {
    let row = table.rows[i];
    row.cells[i].style.backgroundColor = 'red';
}