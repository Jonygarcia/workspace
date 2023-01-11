/*030shortOuts.html/.js: Crea una función showAlert(func, code1, code2, ... code_n) 
que ejecute func al presionar simultáneamente las teclas con códigos code1, code2, ..., 
code_n.*/
"use strict";

function showAlert(func, ...codes) {
    let keys = new Set();

    document.addEventListener("keydown", function (event) {
        keys.add(event.code);

        for (let code of codes) {
            if (!keys.has(code)) {
                return;
            }
        }

        keys.clear();

        func();
    });

    document.addEventListener("keyup", function (event) {
        keys.delete(event.code);
    });
}

showAlert(() => alert("¡Hola!"), "KeyQ", "KeyW");
