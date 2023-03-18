class FooterComponent extends HTMLElement {
  connectedCallback() {
    console.log("footer component");
    this.innerHTML = /*html*/ `
      <footer>
        <div class="social-links">
            <p>Follow us!</p>
            <div class="icons">
               <div class="row">
                <a href="https://www.twitter.com" class="icon">
                    <img  src="/img/icons/svg/twitter.svg" />
                </a>
                <a href="https://www.dev.to" class="icon">
                    <img  src="/img/icons/svg/dev.svg" />
                </a></div>
            <div class="row">
                <a href="https://www.linkedin.com" class="icon">
                    <img  src="/img/icons/svg/linkedin.svg" />
                </a>
                <a href="https://www.github.com" class="icon">
                    <img  src="/img/icons/svg/github.svg" />
                </a></div>
            </div>
        </div>
        <div class="content">
            <div class="legal">
                <p>Copyright © 2023 MousePaw Media</p>
                <p>All Rights Reserved.</p>
                <div class="links">
                    <a href="#">Sitemap</a><a href="#">Community Rules</a
                    ><a href="#">Terms of Development</a><a href="#">Terms of Use</a
                    ><a href="#">Privacy Policy</a><a href="#">Legal</a>
                </div>
            </div>
      </div>
    </footer>`;
  }
}

customElements.define("footer-component", FooterComponent);
