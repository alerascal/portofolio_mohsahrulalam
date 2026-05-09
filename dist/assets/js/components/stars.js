/* ==========================================
   STARS BACKGROUND COMPONENT
   Dynamic stars generation
   ========================================== */

class StarsBackground {
    constructor() {
        const config = window.PortfolioConfig;
        const utils = window.PortfolioUtils;
        
        this.container = document.querySelector(config.selectors.starsContainer);
        this.count = config.stars.count;
        this.animDuration = config.stars.animationDuration;
        this.utils = utils;
    }

    init() {
        if (!this.container) return;

        // Use document fragment for better performance
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < this.count; i++) {
            const star = this.createStar();
            fragment.appendChild(star);
        }

        this.container.appendChild(fragment);
    }

    createStar() {
        const star = document.createElement('div');
        star.className = 'star';
        
        // Random position
        star.style.left = `${this.utils.random(0, 100)}%`;
        star.style.top = `${this.utils.random(0, 100)}%`;
        
        // Random animation delay
        star.style.animationDelay = `${this.utils.random(0, 3)}s`;
        
        // Random animation duration
        star.style.animationDuration = `${this.utils.random(
            this.animDuration.min, 
            this.animDuration.max
        )}s`;
        
        return star;
    }

    destroy() {
        if (this.container) {
            this.container.innerHTML = '';
        }
    }
}

// Export to global namespace
window.StarsBackground = StarsBackground;