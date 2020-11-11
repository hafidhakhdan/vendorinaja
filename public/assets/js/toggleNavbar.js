const menutoggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");
const main = document.querySelector(".main");

menutoggle.addEventListener("click", function () {
  nav.classList.toggle("slide");
});

main.addEventListener("click", function () {
  nav.classList.remove("slide");
});
