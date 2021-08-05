// function mainScroll() {
//     console.log("modules are bundled nicely!");
// }
//
// export default mainScroll;



function mobileMenu() {
    // let menu = document.getElementById("menu");

    // if (x.style.display === "block") {
    //     x.style.display = "none";
    // } else {
    //     x.style.display = "block";
    // }

    let header = document.querySelector('.header'),
        mobile = document.querySelector('.mobile'),
        burgerOpen = document.querySelector('.burger__open'),
        burgerClose = document.querySelector('.burger__close');

    // const windowInnerWidth = document.documentElement.clientWidth;
    // const windowInnerHeight = document.documentElement.clientHeight;

    // TODO: посмотреть на b2broker функцию на проверку мобилки и дописать мобильный бургер
    document.documentElement.clientWidth <= 900 ? header.classList.add('mobile') : header.classList.remove('mobile');

    burgerOpen.onclick = function() {
        this.hidden = true;
        burgerOpen.hidden = false;

        console.log(this);
    };
    burgerClose.onclick = function() {
        this.hidden = false;
        burgerOpen.hidden = true;
    };

}
mobileMenu();

export default mobileMenu;



// burger
// function burgerMenu(selector) {
//     let menu = $(selector);
//     let button = menu.find('.burger-menu_button', '.burger-menu_lines');
//     let links = menu.find('.burger-menu_link');
//     let overlay = menu.find('.burger-menu_overlay');
//
//     button.on('click', (e) => {
//         e.preventDefault();
//         toggleMenu();
//     });
//
//     links.on('click', () => toggleMenu());
//     overlay.on('click', () => toggleMenu());
//
//     function toggleMenu(){
//         menu.toggleClass('burger-menu_active');
//
//         if (menu.hasClass('burger-menu_active')) {
//             $('body').css('overlow', 'hidden');
//         } else {
//             $('body').css('overlow', 'visible');
//         }
//     }
// }
//
// burgerMenu('.burger-menu');


