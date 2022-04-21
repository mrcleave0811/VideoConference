var hamburger_menu;
var toggle_btn;
var big_wrapper;

function declare() {
    hamburger_menu = document.querySelector(".hamburger-menu");
    big_wrapper = document.querySelector(".big-wrapper");
}

const main = document.querySelector("main");

declare();

function events() {
    hamburger_menu.addEventListener("click", () => {
        big_wrapper.classList.toggle("active");
    })
}

events();