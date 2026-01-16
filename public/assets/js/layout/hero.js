/* ==========================================
   HERO PARALLAX CONTROLLER
   Smooth parallax scrolling effect
   ========================================== */

class HeroParallax {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.element = document.querySelector(config.selectors.hero);
        this.speed = config.parallax.speed;
        this.maxOpacity = config.parallax.maxOpacity;
        this.minOpacity = config.parallax.minOpacity;
        this.throttleTimer = null;
    }

    init() {
        if (!this.element) return;

        window.addEventListener('scroll', () => this.throttledScroll(), { 
            passive: true 
        });
    }

    throttledScroll() {
        if (this.throttleTimer) return;
        
        this.throttleTimer = requestAnimationFrame(() => {
            this.handleScroll();
            this.throttleTimer = null;
        });
    }

    handleScroll() {
        const scrolled = window.pageYOffset;
        const windowHeight = window.innerHeight;

        // Only apply parallax when hero is visible
        if (scrolled < windowHeight) {
            const translateY = scrolled * this.speed;
            const opacity = this.maxOpacity - (scrolled / windowHeight) * (this.maxOpacity - this.minOpacity);
            
            this.element.style.transform = `translateY(${translateY}px)`;
            this.element.style.opacity = opacity;
        }
    }

    destroy() {
        if (this.throttleTimer) {
            cancelAnimationFrame(this.throttleTimer);
        }
    }
}

// Export to global namespace
window.HeroParallax = HeroParallax;