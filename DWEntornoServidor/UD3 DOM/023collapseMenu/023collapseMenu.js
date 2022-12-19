/*023collapsableMenu.html/.js: Crea un menú que se abra/colapse al hacer click.*/
"use strict";

function openCloseMenu(elem){
    elem.classList.contains("open") ? elem.classList.remove("open") : elem.classList.add("open");
}