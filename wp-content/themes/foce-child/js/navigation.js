const burger = document.querySelector(".burger");
const links = document.querySelectorAll("nav li");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
});

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
    burger.classList.remove("active");
  });
});