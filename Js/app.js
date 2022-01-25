var icon = document.getElementById("menu-icon");
var header = document.getElementById("header");
var nav = document.getElementById("nav")

function menu_position() {
    var Yscroll  = document.documentElement.scrollTop;
    if(Yscroll >=150 && window.innerWidth > 576){
    nav.style.position="fixed";
    }else if(Yscroll <=150 && window.innerWidth > 576) {
        nav.style.position="relative";
    } else {
        nav.style.position="absolute";
    }
}
window.addEventListener("scroll", () => menu_position() )
window.addEventListener("resize" , () => menu_position())

icon.addEventListener("click", function () {
icon.classList.toggle("menu-active");
header.classList.toggle("with-menu");
});
