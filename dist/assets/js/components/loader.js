/* ==========================================
   LOADING SCREEN COMPONENT
   Premium loading experience
   ========================================== */

class LoadingScreen {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.element = document.querySelector(config.selectors.loadingScreen);
        this.percentage = document.querySelector(config.selectors.loadingPercentage);
        this.minLoadTime = config.loading.minDisplayTime;
        this.fadeOutDuration = config.loading.fadeOutDuration;
        this.startTime = Date.now();
    }

    init() {
        if (!this.element) return;
        
        // Prevent scrolling during loading
        document.body.style.overflow = 'hidden';

        // Animate percentage if element exists
        if (this.percentage) {
            this.animatePercentage();
        }

        // Hide loader when page is fully loaded
        if (document.readyState === 'complete') {
            this.hide();
        } else {
            window.addEventListener('load', () => this.hide());
        }
    }

    animatePercentage() {
        let current = 0;
        const target = 100;
        const duration = this.minLoadTime;
        const increment = target / (duration / 16); // 60fps

        const animate = () => {
            current = Math.min(current + increment, target);
            this.percentage.textContent = `${Math.floor(current)}%`;
            
            if (current < target) {
                requestAnimationFrame(animate);
            }
        };

        requestAnimationFrame(animate);
    }

    hide() {
        const elapsedTime = Date.now() - this.startTime;
        const remainingTime = Math.max(0, this.minLoadTime - elapsedTime);

        setTimeout(() => {
            this.element.classList.add('hidden');

            setTimeout(() => {
                document.body.style.overflow = '';
                this.triggerEntranceAnimations();
                
                setTimeout(() => {
                    this.element?.remove();
                }, this.fadeOutDuration);
            }, 100);
        }, remainingTime);
    }

    triggerEntranceAnimations() {
        const config = window.PortfolioConfig;
        const elements = document.querySelectorAll(config.selectors.scrollAnimateElements);
        
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('active');
            }, index * config.scroll.staggerDelay);
        });
    }
}

// Export to global namespace
window.LoadingScreen = LoadingScreen;