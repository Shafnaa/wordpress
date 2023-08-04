var bringOut = document.getElementById("bringOut");
var takeIn = document.getElementById("takeIn");
var sidebar = document.getElementById("sidebar");

bringOut.addEventListener("click", out);
takeIn.addEventListener("click", inside);
window.addEventListener("click", outside);

function out() {
  sidebar.style.display = "block";
}
function inside() {
  sidebar.style.display = "none";
}
function outside(e) {
  if (e.target == sidebar) {
    sidebar.style.display = "none";
  }
}
