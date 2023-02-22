class HeaderComponent extends HTMLElement {
  connectedCallback() {
    console.log("header component");
    this.innerHTML = /*html*/ `
      <header>
        <!-- mobile logo -->
        <div class="logo mobile">
          <a href="./index.html">
            <img src="../img/logo/mousepawmedia_logo.png"/>
          </a>
        </div>
        <!-- wordmark logo -->
        <div class="logo">
          <a href="./index.html">
            <img src="../img/logo/mousepawmedia_wordmark_logo.png"/>
          </a>
        </div>
        <!-- mobile menu toggle icon -->
        <button class="toggle-menu-button" id="toggle-menu-button">
          <img id="hamburger-icon" class="visible" src="../img/icons/svg/hamburger.svg" />
          <img id="close-icon" src="../img/icons/svg/close.svg" />
        </button>
        <!-- standard nav -->
        <nav>
            <a href="./company.html">Company</a>
            <a href="./projects.html">Projects</a>
            <a href="./developers.html">Developers</a>
            <button>Internship</button>
        </nav>
    </header>`;
  }
}

customElements.define("header-component", HeaderComponent);
