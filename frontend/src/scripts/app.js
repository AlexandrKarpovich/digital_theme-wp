// import log from "./modules/sample-module";


// console.log("scrips are compiled successfully!");
//
// log();


// import mainScroll from "./modules/main-screen";
//
// console.log("scrips are compiled successfully!");
//
// mainScroll();




// import mobileMenu from "./modules/main-screen";
//
//
// mobileMenu();




//s
// var i = 0;
// var txt = 'Lorem ipsum typing effect!'; /* Текст */
// var speed = 50; /* Скорость/длительность эффекта в миллисекундах */
//
// function typeWriter() {
//     if (i < txt.length) {
//         document.getElementById("demo").innerHTML += txt.charAt(i);
//         i++;
//         setTimeout(typeWriter, speed);
//     }
// }




// TODO: main_screen
window.addEventListener('scroll', function() {
    // document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
    let blockRotate = document.querySelector('.image-block'),
        blockYellow = document.querySelector('.bg-yellow'),
        slider = document.querySelector('.slider');

    let scrollPos = window.scrollY;

    if (scrollPos <= 260) {
        blockRotate.style.transform = 'rotate(' + (25.68 - scrollPos / 10  ) + 'deg)';
        blockYellow.style.transform = 'rotate(' + (25.68 - scrollPos / 10  ) + 'deg)';
        slider.style.top = (scrollPos / 2) + '%';
        console.log(scrollPos);
    } else {
        blockRotate.style.transform = 'rotate(' + ( 0 ) + 'deg)';
        blockYellow.style.transform = 'rotate(' + ( 0 ) + 'deg)';
    }
    // console.log(scrollPos);
});


//
// // write text
// function writeTextByJS(id, text, speed){
//
//     let ele = document.getElementById(id),
//         txt = text.join("").split("");
//
//     let interval = setInterval(function(){
//
//         if(!txt[0]){
//
//             return clearInterval(interval);
//         };
//
//         ele.innerHTML += txt.shift();
//     }, speed != undefined ? speed : 100);
//
//     return false;
// };
//
// writeTextByJS("demo", ["Google '/n'", "Yandex '/n'"] );
// // writeTextByJS("#typeText", ["Yandex"] );
// // writeTextByJS("#typeText", ["Facebook"] );
//
// function changeWriteText() {
//
// }



let typed = new Typed('#typed', { // Тут id того блока, в которм будет анимация
    stringsElement: '#typed-strings', // Тут id блока из которого берем строки для анимации
    typeSpeed: 100, // Скорость печати
    startDelay: 500, // Задержка перед стартом анимации
    backSpeed: 70, // Скорость удаления
    backDelay: 3000, // Пауза перед удалением
    loop: true, // Повтор (true или false)
    loopCount: false, // Число повторов, false = бесконечно
    showCursor: true, // Отображение курсора
    attr: null, // Атрибут
    preStringTyped: function () {
        // TODO: менять цвет для печати
        // console.log('hello')
    },
});



$(document).ready(function(){

    // slider little
    $('.slider-phone').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    // slider big
    $('.slider-big').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});