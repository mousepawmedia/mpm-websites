class MenuComponent extends HTMLElement {
  connectedCallback() {
    console.log("menu component");
    this.innerHTML = /*html*/ `
        <!-- mobile menu and nav -->
        <nav class="menu" id="menu">
            <a href="/company.html">Company</a>
            <a href="/projects.html">Projects</a>
            <a href="/developers.html">Developers</a>
            <button id="toggle-submenu-button">
              <span>Internships<img id="submenu-caret-icon" src="/img/icons/svg/caret-down.svg"/></span>

            </button>
            <nav class="submenu" id="submenu">
              <a href="/internship.html">Internship</a>
              <a href="/mentorship.html">Mentorship</a>
              <a href="/recruiting.html">Recruiting</a>
            </nav>
        </nav>
`;
  }
}

customElements.define("menu-component", MenuComponent);
