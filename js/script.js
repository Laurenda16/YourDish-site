var petit_menu = document.querySelector(".toggle_menu");
var menu = document.querySelector(".menu");

petit_menu.onclick = function () {
  petit_menu.classList.toggle("active");
  menu.classList.toggle("res");
};
//numero
function limitInputLength() {
  var input = document.getElementById("phone");
  var maxLength = 10;

  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
  }
}

