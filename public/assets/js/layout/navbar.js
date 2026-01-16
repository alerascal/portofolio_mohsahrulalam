/* ==========================================
   NAVBAR CONTROLLER
   Scroll-based navbar effects
   ========================================== */

class NavbarController {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.nav = document.querySelector(config.selectors.navbar);
        this.scrollThreshold = config.navbar.scrollThreshold;
        this.hideThreshold = config.navbar.hideThreshold;
        this.lastScroll = 0;
        this.throttleTimer = null;
        this.throttleDelay = config.navbar.throttleDelay;
    }

    init() {
        if (!this.nav) return;

        // Add smooth transition
        this.nav.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';

        window.addEventListener('scroll', () => this.throttledScroll(), { 
            passive: true 
        });
    }

    throttledScroll() {
        if (this.throttleTimer) return;
        
        this.throttleTimer = setTimeout(() => {
            this.handleScroll();
            this.throttleTimer = null;
        }, this.throttleDelay);
    }

    handleScroll() {
        const currentScroll = window.pageYOffset;

        // Background and shadow effects
        if (currentScroll > this.scrollThreshold) {
            this.nav.style.background = 'rgba(10, 14, 39, 0.98)';
            this.nav.style.boxShadow = '0 10px 40px rgba(0, 0, 0, 0.4)';
            this.nav.style.backdropFilter = 'blur(20px)';
        } else {
            this.nav.style.background = 'rgba(10, 14, 39, 0.95)';
            this.nav.style.boxShadow = 'none';
        }

        // Hide/show on scroll direction
        if (currentScroll > this.lastScroll && currentScroll > this.hideThreshold) {
            this.nav.style.transform = 'translateY(-100%)';
        } else {
            this.nav.style.transform = 'translateY(0)';
        }

        this.lastScroll = currentScroll;
    }

    destroy() {
        if (this.throttleTimer) {
            clearTimeout(this.throttleTimer);
        }
    }
}

// Export to global namespace
window.NavbarController = NavbarController;