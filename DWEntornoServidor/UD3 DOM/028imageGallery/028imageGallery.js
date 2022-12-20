/*028imageGallery.html/.js:Crea una galería de imágenes donde la imagen principal 
cambia al hacer clic en una miniatura. Como en Amazon, por ejemplo.*/
"use strict";

images.onclick = function (event) {
    let elem = event.target.closest("img");
    
    if (elem) showImage(elem.src);
};

function showImage(src) {
    let fullImg = document.getElementById("fullImg");

    fullImg.src != src ? fullImg.src = src : "";
}