let navbar = document.querySelector(".navbar");
let navbarBtn = document.querySelector(".navbarBtn");
navbarBtn.onclick = function() {
    navbar.classList.toggle("active");
    if (navbar.classList.contains("active")) {
        navbarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else
        navbarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}