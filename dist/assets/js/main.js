/* ==========================================
   MAIN INITIALIZATION
   Bootstrap all portfolio components
   ========================================== */

(function() {
    'use strict';

    /**
     * Portfolio Application
     * Main controller for all components
     */
    class PortfolioApp {
        constructor() {
            this.components = {};
            this.initialized = false;
        }

        /**
         * Initialize all components
         */
        init() {
            if (this.initialized) {
                window.PortfolioUtils.log('Already initialized!', 'warning');
                return;
            }

            window.PortfolioUtils.log('Initializing Portfolio...', 'info');

            // Initialize components in order
            this.initLoadingScreen();
            this.initStarsBackground();
            this.initTypingAnimation();
            this.initScrollAnimations();
            this.initSmoothScroll();
            this.initNavbar();
            this.initHeroParallax();
            this.initCardEffects();
            this.initIntersectionObserver();

            this.initialized = true;
            
            window.PortfolioUtils.log(
                '🚀 Portfolio Initialized Successfully!', 
                'success'
            );
        }

        /**
         * Initialize Loading Screen
         */
        initLoadingScreen() {
            if (!window.LoadingScreen) return;
            
            this.components.loader = new window.LoadingScreen();
            this.components.loader.init();
        }

        /**
         * Initialize Stars Background
         */
        initStarsBackground() {
            if (!window.StarsBackground) return;
            
            this.components.stars = new window.StarsBackground();
            this.components.stars.init();
        }

        /**
         * Initialize Typing Animation
         */
        initTypingAnimation() {
            if (!window.TypingAnimation) return;
            
            this.components.typing = new window.TypingAnimation();
            this.components.typing.init();
        }

        /**
         * Initialize Scroll Animations
         */
        initScrollAnimations() {
            if (!window.ScrollAnimations) return;
            
            this.components.scrollAnim = new window.ScrollAnimations();
            this.components.scrollAnim.init();
        }

        /**
         * Initialize Smooth Scroll
         */
        initSmoothScroll() {
            if (!window.SmoothScroll) return;
            
            this.components.smoothScroll = new window.SmoothScroll();
            this.components.smoothScroll.init();
        }

        /**
         * Initialize Navbar
         */
        initNavbar() {
            if (!window.NavbarController) return;
            
            this.components.navbar = new window.NavbarController();
            this.components.navbar.init();
        }

        /**
         * Initialize Hero Parallax
         */
        initHeroParallax() {
            if (!window.HeroParallax) return;
            
            this.components.parallax = new window.HeroParallax();
            this.components.parallax.init();
        }

        /**
         * Initialize Card Effects
         */
        initCardEffects() {
            if (!window.CardEffects) return;
            
            this.components.cards = new window.CardEffects();
            this.components.cards.init();
        }

        /**
         * Initialize Intersection Observer
         */
        initIntersectionObserver() {
            if (!window.IntersectionController) return;
            
            this.components.intersection = new window.IntersectionController();
            this.components.intersection.init();
        }

        /**
         * Destroy all components (cleanup)
         */
        destroy() {
            Object.keys(this.components).forEach(key => {
                if (this.components[key].destroy) {
                    this.components[key].destroy();
                }
            });

            this.components = {};
            this.initialized = false;
            
            window.PortfolioUtils.log('Portfolio destroyed', 'info');
        }

        /**
         * Get component instance
         * @param {String} name - Component name
         * @returns {Object|null}
         */
        getComponent(name) {
            return this.components[name] || null;
        }
    }

    /**
     * Initialize when DOM is ready
     */
    function initializeApp() {
        const app = new PortfolioApp();
        app.init();

        // Make app globally accessible for debugging
        window.PortfolioApp = app;
    }

    /**
     * Wait for DOM to be ready
     */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeApp);
    } else {
        initializeApp();
    }

})();