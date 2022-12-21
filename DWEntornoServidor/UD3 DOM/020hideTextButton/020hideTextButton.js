/*020hideTextButton.html/.js: Agrega JavaScript al button para hacer que <div 
id="text"> desaparezca al hacerle click.*/
"use strict";

function hideText() {
    let text = document.getElementById("text");

    if (!text.getAttribute("hidden")) {
        text.setAttribute("hidden", "true");
    } else {
        text.removeAttribute("hidden");
    }
}
