/* ==========================================
   INTERSECTION OBSERVER
   Modern, performance-optimized scroll detection
   ========================================== */

class IntersectionController {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.observerOptions = {
            root: null,
            rootMargin: '0px 0px -100px 0px',
            threshold: 0.1
        };
        
        this.observer = null;
        this.elements = document.querySelectorAll(
            `${config.selectors.scrollAnimateElements}, [data-animate]`
        );
    }

    init() {
        // Check if IntersectionObserver is supported
        if (!('IntersectionObserver' in window)) {
            window.PortfolioUtils.log(
                'IntersectionObserver not supported, using fallback', 
                'warning'
            );
            return;
        }

        // Create observer
        this.observer = new IntersectionObserver(
            (entries) => this.handleIntersection(entries),
            this.observerOptions
        );

        // Observe all elements
        this.elements.forEach(element => {
            this.observer.observe(element);
        });

        window.PortfolioUtils.log(
            `Observing ${this.elements.length} elements`, 
            'info'
        );
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add active class when in viewport
                entry.target.classList.add('active');
                
                // Optional: Stop observing after animation (save resources)
                if (entry.target.dataset.once !== undefined) {
                    this.observer.unobserve(entry.target);
                }
            }
        });
    }

    destroy() {
        if (this.observer) {
            this.observer.disconnect();
        }
    }
}

// Export to global namespace
window.IntersectionController = IntersectionController;