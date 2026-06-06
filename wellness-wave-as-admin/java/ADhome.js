var toggleBtn = document.getElementById("toggleBtn");
var sideNav = document.getElementById("sideNav");
var mainDiv = document.getElementById("mainDiv");
toggleBtn.addEventListener("click", function () {
  sideNav.classList.toggle("d-none");
  mainDiv.classList.toggle("close-nav");
});
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
