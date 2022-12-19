/*026orderTable.html/.js: Haz que la tabla se pueda ordenar: los clics en elementos <th> 
deberían ordenarla por la columna correspondiente. */
"use strict";

function sortTable(type) {
    let tbody = grid.querySelector("tbody");
    let rows = Array.from(tbody.rows);
    let compare;

    switch (type) {
        case "number":
            compare = function (prev, next) {
                return prev.cells[0].innerHTML - next.cells[0].innerHTML;
            };
            break;
        case "string":
            compare = function (prev, next) {
                return prev.cells[1].innerHTML > next.cells[1].innerHTML ? 1 : -1;
            };
            break;
        default:
            console.log("Error al ordenar la tabla");
    }

    rows.sort(compare);
    tbody.append(...rows);
}
