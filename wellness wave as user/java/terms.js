var span = document.getElementById("up");

window.onscroll = function () {
  if (this.scrollY >= 200) {
    span.classList.add("show");
  } else {
    span.classList.remove("show");
  }
};

span.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};
