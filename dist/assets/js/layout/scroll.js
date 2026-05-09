/* ==========================================
   SCROLL ANIMATIONS CONTROLLER
   Reveal elements on scroll
   ========================================== */

class ScrollAnimations {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.elements = document.querySelectorAll(config.selectors.scrollAnimateElements);
        this.offset = config.scroll.offset;
        this.throttleTimer = null;
        this.throttleDelay = config.scroll.throttleDelay;
    }

    init() {
        if (!this.elements.length) return;

        // Initial check
        this.handleScroll();

        // Listen to scroll events
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
        this.elements.forEach(element => {
            if (this.isInViewport(element)) {
                element.classList.add('active');
            }
        });
    }

    isInViewport(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        
        return rect.top <= windowHeight - this.offset;
    }

    destroy() {
        if (this.throttleTimer) {
            clearTimeout(this.throttleTimer);
        }
    }
}

/* ==========================================
   SMOOTH SCROLL CONTROLLER
   Smooth scrolling for anchor links
   ========================================== */

class SmoothScroll {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.links = document.querySelectorAll(config.selectors.smoothScrollLinks);
        this.navbar = document.querySelector(config.selectors.navbar);
    }

    init() {
        this.links.forEach(link => {
            link.addEventListener('click', (e) => this.handleClick(e));
        });
    }

    handleClick(e) {
        e.preventDefault();
        
        const targetId = e.currentTarget.getAttribute('href');
        const target = document.querySelector(targetId);
        
        if (!target) return;

        const navHeight = this.navbar?.offsetHeight || 0;
        const targetPosition = target.offsetTop - navHeight;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });

        // Update URL without jumping
        if (history.pushState) {
            history.pushState(null, null, targetId);
        }
    }

    destroy() {
        // Clean up if needed
    }
}

// Export to global namespace
window.ScrollAnimations = ScrollAnimations;
window.SmoothScroll = SmoothScroll;