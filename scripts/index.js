const hoverBar = document.getElementsByClassName("hover-bar")[0];
const hamburger = document.getElementById("hamburger");

const sidebar = document.getElementsByClassName("sidebar")[0];
const main = document.getElementsByClassName("main")[0];

hoverBar.addEventListener("mouseenter", () => {
  sidebar.style.marginLeft = 0;
  hamburger.style.visibility = "hidden";
  main.style.transform = "perspective(1000px) rotateY(-20deg)";
});

main.addEventListener("mouseenter", () => {
  sidebar.style.marginLeft = "-500px";
  hamburger.style.visibility = "visible";
  main.style.transform = "none";
});