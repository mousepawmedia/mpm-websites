console.log("Hello, world!");

// MOBILE MENU ELEMENTS AND EVENT HANDLING
//menu and submenu
const menu = document.getElementById("menu");
const submenu = document.getElementById("submenu");

//main menu toggle button and icons
const toggleMenuButton = document.getElementById("toggle-menu-button");
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");

//submenu toggle button and icon
const toggleSubmenuButton = document.getElementById("toggle-submenu-button");

//class toggle functions
const handleHamburgerClick = () => {
  hamburgerIcon.classList.toggle("visible");
  closeIcon.classList.toggle("visible");
  menu.classList.toggle("open");
};
const handleSubmenuClick = () => {
  // will add toggle classlist of caret icon
  submenu.classList.toggle("open");
};

//event listeners
console.log("add listener");
toggleMenuButton.addEventListener("click", () => {
  handleHamburgerClick();
});
toggleSubmenuButton.addEventListener("click", () => {
  handleSubmenuClick();
});
