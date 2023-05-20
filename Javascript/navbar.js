var toggleButton = document.getElementById("toggleButton");
var mobileNavbar = document.querySelector("mobilenavbar");

toggleButton.addEventListener("click", function () {
  if (mobileNavbar.style.display === "none") {
    mobileNavbar.style.display = "flex";
  } else {
    mobileNavbar.style.display = "none";
  }
});
