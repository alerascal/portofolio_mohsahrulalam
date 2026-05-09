/* ==========================================
   CORE UTILITIES
   Reusable helper functions
   ========================================== */

const PortfolioUtils = {
    /**
     * Debounce function - delays execution until after wait time
     * @param {Function} func - Function to debounce
     * @param {Number} wait - Wait time in milliseconds
     * @returns {Function}
     */
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    /**
     * Throttle function - limits execution frequency
     * @param {Function} func - Function to throttle
     * @param {Number} limit - Time limit in milliseconds
     * @returns {Function}
     */
    throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    /**
     * Check if element is in viewport
     * @param {HTMLElement} element - Element to check
     * @param {Number} offset - Offset from viewport edge
     * @returns {Boolean}
     */
    isInViewport(element, offset = 0) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.top >= 0 - offset &&
            rect.left >= 0 &&
            rect.bottom <= windowHeight + offset &&
            rect.right <= windowWidth
        );
    },

    /**
     * Get element position relative to document
     * @param {HTMLElement} element - Target element
     * @returns {Object} - {top, left}
     */
    getElementPosition(element) {
        const rect = element.getBoundingClientRect();
        const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
        };
    },

    /**
     * Smooth scroll to element
     * @param {HTMLElement} element - Target element
     * @param {Number} offset - Offset from top
     * @param {String} behavior - Scroll behavior (smooth/auto)
     */
    scrollToElement(element, offset = 0, behavior = 'smooth') {
        const position = this.getElementPosition(element);
        
        window.scrollTo({
            top: position.top - offset,
            behavior: behavior
        });
    },

    /**
     * Random number between min and max
     * @param {Number} min - Minimum value
     * @param {Number} max - Maximum value
     * @returns {Number}
     */
    random(min, max) {
        return Math.random() * (max - min) + min;
    },

    /**
     * Clamp number between min and max
     * @param {Number} value - Value to clamp
     * @param {Number} min - Minimum value
     * @param {Number} max - Maximum value
     * @returns {Number}
     */
    clamp(value, min, max) {
        return Math.min(Math.max(value, min), max);
    },

    /**
     * Linear interpolation
     * @param {Number} start - Start value
     * @param {Number} end - End value
     * @param {Number} amount - Amount (0-1)
     * @returns {Number}
     */
    lerp(start, end, amount) {
        return start + (end - start) * amount;
    },

    /**
     * Map value from one range to another
     * @param {Number} value - Input value
     * @param {Number} inMin - Input minimum
     * @param {Number} inMax - Input maximum
     * @param {Number} outMin - Output minimum
     * @param {Number} outMax - Output maximum
     * @returns {Number}
     */
    map(value, inMin, inMax, outMin, outMax) {
        return (value - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
    },

    /**
     * Check if device is mobile
     * @returns {Boolean}
     */
    isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    },

    /**
     * Check if browser supports feature
     * @param {String} feature - Feature to check
     * @returns {Boolean}
     */
    supports(feature) {
        const features = {
            intersectionObserver: 'IntersectionObserver' in window,
            passiveEvents: (() => {
                let passive = false;
                try {
                    const options = {
                        get passive() {
                            passive = true;
                            return false;
                        }
                    };
                    window.addEventListener('test', null, options);
                    window.removeEventListener('test', null, options);
                } catch (err) {
                    passive = false;
                }
                return passive;
            })()
        };
        
        return features[feature] || false;
    },

    /**
     * Log with styled console message
     * @param {String} message - Message to log
     * @param {String} type - Type (success/error/info/warning)
     */
    log(message, type = 'info') {
        const styles = {
            success: 'color: #00ff88; font-weight: bold;',
            error: 'color: #ff0088; font-weight: bold;',
            info: 'color: #0099ff; font-weight: bold;',
            warning: 'color: #ffaa00; font-weight: bold;'
        };
        
        console.log(`%c${message}`, styles[type]);
    }
};

// Make utils globally available
window.PortfolioUtils = PortfolioUtils;