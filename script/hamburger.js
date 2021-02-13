function mobileMenu() {
  var node = document.getElementById("side-menu");
  document.getElementById("ham-button").appendChild(node);
  toggle();
}

function toggle() {
  var menu = document.getElementById("ham-button");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  }
  else {
    menu.style.display = "block";
  }
}

document.getElementById("ham-button").addEventListener("click", toggle);