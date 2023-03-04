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
    //if page is in submenu, open submenu to view active page
    const parent = item.parentElement;
    if (parent.id === "submenu") {
      parent.classList.add("open");
    }
    item.classList.add("active");
  } else {
    item.classList.remove("active");
  }
});

//HOME CAROUSEL
//set carousel to first item
let currentItem = 1;

//select all carousel items
const items = document.getElementsByClassName("carousel-item");
//select dots and arrows for navigation
const dots = Array.from(document.getElementsByClassName("carousel-dot"));
const prevButton = document.getElementById("prev-item");
const nextButton = document.getElementById("next-item");
//add event listeners for navigation
prevButton.addEventListener("click", function () {
  previousItem();
});
nextButton.addEventListener("click", function () {
  nextItem();
});
dots.forEach((dot, i) => {
  dot.addEventListener("click", () => handleDotClick(i + 1));
});

//navigation functions
function nextItem() {
  handleArrowClick((currentItem += 1));
}
function previousItem() {
  handleArrowClick((currentItem -= 1));
}

function handleArrowClick(itemIndex) {
  if (itemIndex > items.length) {
    currentItem = 1;
  }
  if (itemIndex < 1) {
    currentItem = items.length;
  }
  showCurrentItem(currentItem);
  setActiveDot(currentItem);
}

function handleDotClick(i) {
  currentItem = i;
  showCurrentItem(i);
  setActiveDot(currentItem);
}

function setActiveDot(currentItem) {
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }
  dots[currentItem - 1].classList.add("active");
}

function showCurrentItem(currentItem) {
  for (var i = 0; i < items.length; i++) {
    items[i].style.display = "none";
  }
  items[currentItem - 1].style.display = "flex";
  dots[currentItem - 1].classList.add("active");
}

showCurrentItem(currentItem);
