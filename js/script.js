var petit_menu = document.querySelector(".toggle_menu");
var menu = document.querySelector(".menu");

petit_menu.onclick = function () {
  petit_menu.classList.toggle("active");
  menu.classList.toggle("res");
};
