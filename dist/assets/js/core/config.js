/* ==========================================
   CORE CONFIGURATION
   Global settings and constants
   ========================================== */

const PortfolioConfig = {
    // Loading Screen Settings
    loading: {
        minDisplayTime: 1500,
        fadeOutDuration: 800
    },

    // Stars Background
    stars: {
        count: 200,
        animationDuration: { min: 2, max: 4 }
    },

    // Typing Animation
    typing: {
        texts: [
            'Junior Fullstack Web Developer',
            'Web Developer & IT Support',
            'Laravel & PHP Developer',
            'Problem Solver'
        ],
        typingSpeed: 100,
        deletingSpeed: 50,
        pauseTime: 2000,
        startDelay: 1000
    },

    // Scroll Animations
    scroll: {
        offset: 100,
        throttleDelay: 100,
        staggerDelay: 100
    },

    // Navbar
    navbar: {
        scrollThreshold: 100,
        hideThreshold: 500,
        throttleDelay: 50
    },

    // Parallax
    parallax: {
        speed: 0.5,
        maxOpacity: 1,
        minOpacity: 0.5
    },

    // Selectors
    selectors: {
        loadingScreen: '#loadingScreen',
        loadingPercentage: '#loadingPercentage',
        starsContainer: '#stars',
        typingElement: '#typing',
        navbar: 'nav',
        hero: '.hero',
        scrollAnimateElements: '.scroll-animate',
        smoothScrollLinks: 'a[href^="#"]',
        interactiveCards: '.skill-card, .project-card, .quality-item',
        educationCards: '.education-card'
    }
};

// Make config globally available
window.PortfolioConfig = PortfolioConfig;