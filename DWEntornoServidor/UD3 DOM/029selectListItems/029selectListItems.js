/*029selectListItems.html/.js: Cree una lista donde los elementos son seleccionables, 
como en los administradores de archivos. Un clic en un elemento de la lista selecciona 
solo ese elemento (agrega la clase .selected), deselecciona todos los demás.
Si se hace un clic con Ctrl (Cmd para Mac), el estado seleccionado/deseleccionado 
cambia para ese solo elemento, los otros elementos no se modifican.*/
"use strict";

list.onclick = function (event) {
    let li = event.target.closest("li");

    if (event.ctrlKey || event.metaKey) {
        multipleSelect(li);
    } else {
        singleSelect(li);
    }
};

function singleSelect(li) {
    let arrayList = list.querySelectorAll(".selected");

    for (const elem of arrayList) {
        elem.classList.remove("selected");
    }

    li.classList.toggle("selected");
}

function multipleSelect(li) {
    li.classList.toggle("selected");
}
