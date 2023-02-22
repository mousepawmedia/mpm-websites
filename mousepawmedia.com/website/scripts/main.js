console.log("Hello, world!");

//menu toggle button and icons
const toggleMenuButton = document.getElementById("toggle-menu-button");
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");

//classlist toggle function
const handleHamburgerClick = () => {
  hamburgerIcon.classList.toggle("visible");
  closeIcon.classList.toggle("visible");
  menu.classList.toggle("open");
};

//toggle button click event listener
console.log("add listener");
toggleMenuButton.addEventListener("click", () => {
  handleHamburgerClick();
});
