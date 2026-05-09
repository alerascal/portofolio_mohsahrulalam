class StarsBackground {
    constructor() {
        const config = window.PortfolioConfig;
        const utils = window.PortfolioUtils;

        this.container = document.querySelector(config.selectors.starsContainer);
        this.count = window.innerWidth <= 480 ? 30
                   : window.innerWidth <= 768 ? 50
                   : config.stars.count;
        this.animDuration = config.stars.animationDuration;
        this.utils = utils;
    }

    init() {
        if (!this.container) return;
        const fragment = document.createDocumentFragment();
        for (let i = 0; i < this.count; i++) {
            fragment.appendChild(this.createStar());
        }
        this.container.appendChild(fragment);
    }

    createStar() {
        const star = document.createElement("div");
        star.className = "star";
        star.style.left = `${this.utils.random(0, 100)}%`;
        star.style.top = `${this.utils.random(0, 100)}%`;
        star.style.animationDelay = `${this.utils.random(0, 3)}s`;
        star.style.animationDuration = `${this.utils.random(this.animDuration.min, this.animDuration.max)}s`;
        return star;
    }

    destroy() {
        if (this.container) this.container.innerHTML = "";
    }
}

window.StarsBackground = StarsBackground;
