/* ==========================================
   TYPING ANIMATION COMPONENT
   Smooth typewriter effect
   ========================================== */

class TypingAnimation {
    constructor() {
        const config = window.PortfolioConfig;
        
        this.element = document.querySelector(config.selectors.typingElement);
        this.texts = config.typing.texts;
        this.typingSpeed = config.typing.typingSpeed;
        this.deletingSpeed = config.typing.deletingSpeed;
        this.pauseTime = config.typing.pauseTime;
        this.startDelay = config.typing.startDelay;
        
        this.textIndex = 0;
        this.charIndex = 0;
        this.isDeleting = false;
        this.timeoutId = null;
    }

    init() {
        if (!this.element || !this.texts.length) return;
        
        setTimeout(() => this.type(), this.startDelay);
    }

    type() {
        const currentText = this.texts[this.textIndex];

        if (this.isDeleting) {
            this.element.textContent = currentText.substring(0, this.charIndex - 1);
            this.charIndex--;
        } else {
            this.element.textContent = currentText.substring(0, this.charIndex + 1);
            this.charIndex++;
        }

        // Check if we should start deleting
        if (!this.isDeleting && this.charIndex === currentText.length) {
            this.timeoutId = setTimeout(() => {
                this.isDeleting = true;
                this.type();
            }, this.pauseTime);
            return;
        }

        // Check if we finished deleting
        if (this.isDeleting && this.charIndex === 0) {
            this.isDeleting = false;
            this.textIndex = (this.textIndex + 1) % this.texts.length;
        }

        // Continue typing/deleting
        const speed = this.isDeleting ? this.deletingSpeed : this.typingSpeed;
        this.timeoutId = setTimeout(() => this.type(), speed);
    }

    destroy() {
        if (this.timeoutId) {
            clearTimeout(this.timeoutId);
        }
    }
}

// Export to global namespace
window.TypingAnimation = TypingAnimation;