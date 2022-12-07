/*018orderTable.html/.js: Puede haber más filas en ella.
Escribe el código para ordenarla por la columna "name".*/
"use strict";

let tbody = document.querySelector("tbody")

let arrayPersons = Array.from(tbody.rows);

arrayPersons.sort((prev, next) =>
    prev.cells[0].innerHTML.localeCompare(next.cells[0].innerHTML)
);

tbody.append(...arrayPersons);
