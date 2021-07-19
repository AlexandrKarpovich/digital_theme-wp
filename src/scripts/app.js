import log from "./modules/sample-module";

console.log("scrips are compiled successfully!");

log();




var i = 0;
var txt = 'Lorem ipsum typing effect!'; /* Текст */
var speed = 50; /* Скорость/длительность эффекта в миллисекундах */

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}