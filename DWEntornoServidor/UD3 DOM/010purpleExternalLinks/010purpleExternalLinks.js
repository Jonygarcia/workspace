/*010purpleExternalLinks.html/.js: Haz todos los enlaces externos de color purple 
alterando su propiedad style.*/
"use strict";

let links = document.querySelectorAll("a");

for (const link of links) {
    let href = link.getAttribute("href");

    if (href && href.includes("://") && !href.startsWith("http://internal.com"))
        link.style.color = "purple";
}
