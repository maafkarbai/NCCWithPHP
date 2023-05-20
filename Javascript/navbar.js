var toggleButton = document.getElementById("#toggle-button");
var mobileNavbar = document.querySelector(".mobilenavbar");

toggleButton.addEventListener("click", function () {
  if (mobileNavbar.style.display === "none") {
    mobileNavbar.style.display = "flex";
  } else {
    mobileNavbar.style.display = "none";
  }
});
