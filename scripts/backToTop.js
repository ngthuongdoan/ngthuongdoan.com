// const main = document.getElementsByClassName(".main")[0];
const back_to_top = document.getElementsByClassName("back_to_top")[0];

main.addEventListener("scroll", () => {
  const CLIENT_HEIGHT = document.documentElement.clientHeight;
  let position = main.scrollTop + 663;
  if (position > CLIENT_HEIGHT) {
    back_to_top.style.display = "block";
  } else {
    back_to_top.style.display = "none";
  }
});
