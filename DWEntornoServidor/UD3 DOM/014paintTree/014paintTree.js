/*014paintTree.html/.js: Escribe una función createTree que crea una lista ramificada 
ul/li desde un objeto ramificado.*/
"use strict";

let data = {
    "Fish": {
        "trout": {},
        "salmon": {}
    },
    "Tree": {
        "Huge": {
            "sequoia": {},
            "oak": {}
        },
        "Flowering": {
            "apple tree": {},
            "magnolia": {}
        }
    }
};

function createTree(container, obj) {
    container.innerHTML = createTreeText(obj); //* Función con innerHTML
    // container.append(createTreeText(obj)); //* Función con DOM
}

//* Función con innerHTML
function createTreeText(obj) {
    let li = "";

    for (const key in obj) {
        li += "<li>" + key + createTreeText(obj[key]) + "</li>"
    }

    return (li) ? "<ul>" + li + "</ul>" : "";
}

//* Función con DOM
// function createTreeText(obj) {
//     let ul = document.createElement("ul");

//     for (const key in obj) {
//        let li = document.createElement("li");
//        li.append(document.createTextNode(key));

//        let child = createTreeText(obj[key])
//        if (child) li.append(child);

//        ul.append(li);
//     }

//     return ul;
// }

let container = document.getElementById('container');
createTree(container, data);
