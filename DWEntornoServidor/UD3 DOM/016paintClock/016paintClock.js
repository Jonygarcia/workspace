/*016paintClock.html/.js: Reloj coloreado con setInterval*/
"use strict";

let clockStarted;

function clockStart() {
    clockStarted ? clockRunning() : clockStarted = setInterval(clockRunning, 1000); 
}

function clockStop() {
    clearInterval(clockStarted);
    clockStarted = undefined;
}

function clockRunning() {
    let date = new Date();

    let hour = date.getHours();
    hour = hour < 10 ? "0" + hour : hour;
    document.getElementById("hour").innerHTML = hour;

    let mins = date.getMinutes();
    mins = mins < 10 ? "0" + mins : mins;
    document.getElementById("min").innerHTML = mins;

    let secs = date.getSeconds();
    secs = secs < 10 ? "0" + secs : secs;
    document.getElementById("sec").innerHTML = secs;
}