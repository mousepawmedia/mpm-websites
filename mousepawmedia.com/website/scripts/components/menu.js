class MenuComponent extends HTMLElement {
  connectedCallback() {
    console.log("menu component");
    this.innerHTML = /*html*/ `
        <!-- mobile menu and nav -->
        <nav class="menu" id="menu">
            <a href="./company.html">Company</a>
            <a href="./projects.html">Projects</a>
            <a href="./developers.html">Developers</a>
            <button>Internship</button>
        </nav>
`;
  }
}

customElements.define("menu-component", MenuComponent);
