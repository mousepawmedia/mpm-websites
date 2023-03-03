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
const submenuCaretIcon = document.getElementById("submenu-caret-icon");

//class toggle functions
const handleHamburgerClick = () => {
  hamburgerIcon.classList.toggle("visible");
  closeIcon.classList.toggle("visible");
  menu.classList.toggle("open");
};
const handleSubmenuClick = () => {
  submenuCaretIcon.classList.toggle("open");
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

// MOBILE MENU ACTIVE NAV ITEM
//get current path from window
const path = window.location.pathname.split("/")[1];
//select all menu items
const menuItems = Array.from(menu.getElementsByTagName("a"));
//loop through to check if href matches path
menuItems.forEach((item) => {
  const href = item.href.split("/")[3];
  if (path === href) {
    item.classList.add("active");
  } else {
    item.classList.remove("active");
  }
});
