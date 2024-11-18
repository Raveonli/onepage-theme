// menu.js
document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const menu = document.querySelector(".main-menu ul");

  hamburger.addEventListener("click", function () {
    menu.classList.toggle("active");
  });
});
