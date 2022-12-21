/*031addOption.html/.js: Añade una opción al select. 
Utiliza JavaScript para:
Mostrar el valor y el texto del option seleccionado.
Añadir un option: <option value="classic">Classic</option>.
Seleccionarlo.*/

"use strict";

let optionSelected = genres.options[genres.selectedIndex];
alert("Value: " + optionSelected.value + " - Text: " + optionSelected.innerHTML);

let classic = new Option("Classic", "classic");
genres.append(classic);

optionSelected.selected = false;
classic.selected = true;

optionSelected = genres.options[genres.selectedIndex];
alert("Value: " + optionSelected.value + " - Text: " + optionSelected.innerHTML);
