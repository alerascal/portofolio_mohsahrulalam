/* ==========================================
   CARD EFFECTS COMPONENT
   Interactive 3D card effects
   ========================================== */

class CardEffects {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.interactiveCards = document.querySelectorAll(config.selectors.interactiveCards);
        this.educationCards = document.querySelectorAll(config.selectors.educationCards);
    }

    init() {
        // Advanced effects for skill, project, quality cards
        this.interactiveCards.forEach(card => {
            this.addTiltEffect(card);
            this.addGlowEffect(card);
        });

        // Simple hover effects for education cards
        this.educationCards.forEach(card => {
            this.addSimpleHover(card);
        });
    }

    addTiltEffect(card) {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    }

    addGlowEffect(card) {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    }

    addSimpleHover(card) {
        // Simple smooth hover effect for education cards
        // CSS transitions handle the visual effects
        card.addEventListener('mouseenter', () => {
            card.style.transition = 'all 0.45s cubic-bezier(0.4, 0, 0.2, 1)';
        });
    }

    destroy() {
        // Remove event listeners if needed
        this.interactiveCards.forEach(card => {
            card.replaceWith(card.cloneNode(true));
        });
        
        this.educationCards.forEach(card => {
            card.replaceWith(card.cloneNode(true));
        });
    }
}

// Export to global namespace
window.CardEffects = CardEffects;