<!DOCTYPE html>
<html lang="id" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login - Project Management Dashboard</title>
        <meta
            name="description"
            content="Login to access your project management dashboard"
        />

        <!-- Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <script
            defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        ></script>

        <style>
            :root {
                --primary-gradient: linear-gradient(
                    135deg,
                    #667eea 0%,
                    #764ba2 100%
                );
                --secondary-gradient: linear-gradient(
                    135deg,
                    #f093fb 0%,
                    #f5576c 100%
                );
                --accent-gradient: linear-gradient(
                    135deg,
                    #4facfe 0%,
                    #00f2fe 100%
                );
                --text-primary: #2d3748;
                --text-secondary: #718096;
                --text-muted: #a0aec0;
                --bg-primary: #ffffff;
                --bg-secondary: #f8fafc;
                --bg-card: rgba(255, 255, 255, 0.95);
                --border: #e2e8f0;
                --border-light: #f1f5f9;
                --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
                --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.1);
                --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.15);
                --glass-bg: rgba(255, 255, 255, 0.1);
                --glass-border: rgba(255, 255, 255, 0.2);
                --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                --bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            html[data-theme="dark"] {
                --text-primary: #f7fafc;
                --text-secondary: #cbd5e0;
                --text-muted: #718096;
                --bg-primary: #0f172a;
                --bg-secondary: #1a202c;
                --bg-card: rgba(26, 32, 44, 0.95);
                --border: #2d3748;
                --border-light: #4a5568;
                --glass-bg: rgba(26, 32, 44, 0.1);
                --glass-border: rgba(255, 255, 255, 0.1);
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto,
                    Arial, sans-serif;
                background: var(--bg-secondary);
                color: var(--text-primary);
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                overflow-x: hidden;
            }

            /* Animated Background */
            body::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: radial-gradient(
                        circle at 20% 50%,
                        rgba(102, 126, 234, 0.15) 0%,
                        transparent 50%
                    ),
                    radial-gradient(
                        circle at 80% 20%,
                        rgba(118, 75, 162, 0.15) 0%,
                        transparent 50%
                    ),
                    radial-gradient(
                        circle at 40% 80%,
                        rgba(240, 147, 251, 0.15) 0%,
                        transparent 50%
                    );
                animation: backgroundMove 20s ease-in-out infinite;
                z-index: -2;
            }

            @keyframes backgroundMove {
                0%,
                100% {
                    transform: translate(0, 0) rotate(0deg);
                }
                33% {
                    transform: translate(30px, -30px) rotate(0.5deg);
                }
                66% {
                    transform: translate(-20px, 20px) rotate(-0.5deg);
                }
            }

            /* Floating particles */
            .particle {
                position: absolute;
                width: 4px;
                height: 4px;
                background: var(--primary-gradient);
                border-radius: 50%;
                opacity: 0.6;
                animation: float 6s ease-in-out infinite;
                z-index: -1;
            }

            .particle:nth-child(2) {
                animation-delay: -2s;
            }
            .particle:nth-child(3) {
                animation-delay: -4s;
            }

            @keyframes float {
                0%,
                100% {
                    transform: translateY(0px) rotate(0deg);
                    opacity: 0.6;
                }
                50% {
                    transform: translateY(-100px) rotate(180deg);
                    opacity: 1;
                }
            }

            /* Login Container */
            .login-container {
                width: 100%;
                max-width: 420px;
                padding: 40px 32px;
                background: var(--bg-card);
                backdrop-filter: blur(20px);
                border: 1px solid var(--glass-border);
                border-radius: 24px;
                box-shadow: var(--shadow-lg);
                margin: 20px;
                position: relative;
                transform: translateY(20px);
                opacity: 0;
                animation: slideUp 0.8s var(--bounce) forwards;
                overflow: hidden;
            }

            .login-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 2px;
                background: var(--primary-gradient);
                animation: shimmer 2s ease-in-out infinite;
            }

            @keyframes slideUp {
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            @keyframes shimmer {
                0% {
                    transform: translateX(-100%);
                }
                100% {
                    transform: translateX(100%);
                }
            }

            .login-header {
                text-align: center;
                margin-bottom: 32px;
                animation: fadeIn 1s ease-out 0.3s both;
            }

            .login-title {
                font-size: 32px;
                font-weight: 800;
                margin: 0 0 8px 0;
                background: var(--primary-gradient);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                position: relative;
            }

            .login-subtitle {
                color: var(--text-secondary);
                font-size: 14px;
                margin: 0;
                font-weight: 500;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .login-form {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .form-group {
                position: relative;
                animation: fadeIn 1s ease-out both;
            }

            .form-group:nth-child(1) {
                animation-delay: 0.4s;
            }
            .form-group:nth-child(2) {
                animation-delay: 0.5s;
            }
            .form-group:nth-child(3) {
                animation-delay: 0.6s;
            }

            .form-input {
                width: 100%;
                padding: 16px 20px 16px 50px;
                border: 2px solid var(--border);
                border-radius: 16px;
                background: var(--bg-primary);
                color: var(--text-primary);
                font: inherit;
                font-size: 16px;
                transition: var(--transition);
                position: relative;
                z-index: 1;
            }

            .form-input:focus {
                outline: none;
                border-color: #667eea;
                box-shadow: 0 0 0 6px rgba(102, 126, 234, 0.12);
                transform: translateY(-2px);
            }

            .form-input:focus + .form-icon {
                color: #667eea;
                transform: translateY(-50%) scale(1.1);
            }

            .form-icon {
                position: absolute;
                left: 16px;
                top: 50%;
                transform: translateY(-50%);
                color: var(--text-muted);
                font-size: 18px;
                transition: var(--transition);
                z-index: 2;
            }

            .error-message {
                color: #ea4c89;
                font-size: 14px;
                margin-top: 12px;
                text-align: center;
                padding: 12px;
                background: rgba(234, 76, 137, 0.1);
                border-radius: 12px;
                border-left: 4px solid #ea4c89;
                animation: shake 0.5s ease-in-out;
            }

            @keyframes shake {
                0%,
                100% {
                    transform: translateX(0);
                }
                25% {
                    transform: translateX(-5px);
                }
                75% {
                    transform: translateX(5px);
                }
            }

            .btn {
                display: inline-flex;
                justify-content: center;
                align-items: center;
                padding: 16px 24px;
                border-radius: 16px;
                font-weight: 600;
                text-decoration: none;
                cursor: pointer;
                border: 0;
                font-size: 16px;
                color: #fff;
                background: var(--primary-gradient);
                box-shadow: var(--shadow-md);
                transition: var(--transition);
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

            .btn::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, 0.2),
                    transparent
                );
                transition: var(--transition);
                z-index: -1;
            }

            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
            }

            .btn:hover::before {
                left: 100%;
            }

            .btn:active {
                transform: translateY(-1px);
            }

            .theme-toggle {
                position: absolute;
                top: 20px;
                right: 20px;
                width: 48px;
                height: 48px;
                display: grid;
                place-items: center;
                border-radius: 16px;
                border: 2px solid var(--glass-border);
                background: var(--glass-bg);
                backdrop-filter: blur(10px);
                color: var(--text-primary);
                cursor: pointer;
                transition: var(--transition);
                font-size: 18px;
                animation: fadeIn 1s ease-out 0.2s both;
            }

            .theme-toggle:hover {
                transform: translateY(-2px) rotate(10deg);
                box-shadow: var(--shadow-md);
                background: var(--accent-gradient);
                color: #fff;
            }

            /* Custom Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
                height: 8px;
            }
            ::-webkit-scrollbar-track {
                background: var(--bg-secondary);
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb {
                background: var(--primary-gradient);
                border-radius: 4px;
                transition: var(--transition);
            }
            ::-webkit-scrollbar-thumb:hover {
                opacity: 0.8;
            }

            /* Responsive Design */
            @media (max-width: 480px) {
                .login-container {
                    margin: 16px;
                    padding: 32px 24px;
                    border-radius: 20px;
                    max-width: none;
                }

                .login-title {
                    font-size: 28px;
                }

                .form-input {
                    padding: 14px 16px 14px 44px;
                    font-size: 16px;
                }

                .form-icon {
                    left: 14px;
                    font-size: 16px;
                }

                .btn {
                    padding: 14px 20px;
                    font-size: 16px;
                }

                .theme-toggle {
                    width: 44px;
                    height: 44px;
                    top: 16px;
                    right: 16px;
                }
            }

            @media (max-width: 320px) {
                .login-container {
                    padding: 24px 16px;
                }

                .login-title {
                    font-size: 24px;
                }
            }

            /* Focus visible for accessibility */
            .btn:focus-visible,
            .theme-toggle:focus-visible {
                outline: 2px solid #667eea;
                outline-offset: 2px;
            }

            .form-input:focus-visible {
                outline: none;
            }

            /* Hover states for touch devices */
            @media (hover: hover) {
                .login-container:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
                }
            }
        </style>
    </head>
    <body>
        <!-- Floating particles -->
        <div class="particle" style="top: 20%; left: 10%"></div>
        <div class="particle" style="top: 60%; left: 85%"></div>
        <div class="particle" style="top: 80%; left: 20%"></div>

        <div class="login-container">
            <button
                class="theme-toggle"
                id="themeToggle"
                aria-label="Toggle theme"
            >
                <i class="fas fa-moon"></i>
            </button>

            <div class="login-header">
                <h1 class="login-title">Selamat Datang</h1>
                <p class="login-subtitle">
                    silakan login terlebih dahulu untuk mengelola portofolio
                    anda
                </p>
            </div>

            <div class="error-message" id="errorMessage" style="display: none">
             tidak semudah itu wkwkwk
            </div>

     <form class="login-form" id="loginForm" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <input
            type="email"
            name="email"
            class="form-input"
            placeholder="Enter your email"
            required
        />
        <i class="fas fa-envelope form-icon" aria-hidden="true"></i>
    </div>

    <div class="form-group">
        <input
            type="password"
            name="password"
            class="form-input"
            placeholder="Enter your password"
            required
        />
        <i class="fas fa-lock form-icon" aria-hidden="true"></i>
    </div>

    <button type="submit" class="btn">
        <span>Sign In</span>
    </button>
</form>
        </div>

        <script>
            // Theme Toggle Functionality
            const themeToggle = document.getElementById("themeToggle");
            const html = document.documentElement;

            // Check for saved theme preference
            const savedTheme = localStorage.getItem("theme") || "light";
            html.setAttribute("data-theme", savedTheme);
            updateThemeIcon(savedTheme);

            themeToggle.addEventListener("click", () => {
                const currentTheme = html.getAttribute("data-theme");
                const newTheme = currentTheme === "dark" ? "light" : "dark";

                html.setAttribute("data-theme", newTheme);
                localStorage.setItem("theme", newTheme);
                updateThemeIcon(newTheme);

                // Add rotation animation
                themeToggle.style.transform = "rotate(360deg)";
                setTimeout(() => {
                    themeToggle.style.transform = "";
                }, 400);
            });

            function updateThemeIcon(theme) {
                const icon = themeToggle.querySelector("i");
                icon.className =
                    theme === "dark" ? "fas fa-sun" : "fas fa-moon";
            }

            // Form Animation & Validation
            const loginForm = document.getElementById("loginForm");
            const errorMessage = document.getElementById("errorMessage");

         
            
            function showError(message) {
                errorMessage.textContent = message;
                errorMessage.style.display = "block";
                errorMessage.style.animation = "none";
                errorMessage.offsetHeight; // Trigger reflow
                errorMessage.style.animation = "shake 0.5s ease-in-out";
            }

            function showSuccess() {
                const button = loginForm.querySelector(".btn");
                const originalText = button.innerHTML;

                button.innerHTML = '<i class="fas fa-check"></i> Success!';
                button.style.background =
                    "linear-gradient(135deg, #48bb78 0%, #38a169 100%)";

                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.style.background = "";
                }, 2000);
            }

            // Input Focus Effects
            const inputs = document.querySelectorAll(".form-input");
            inputs.forEach((input) => {
                input.addEventListener("focus", () => {
                    input.parentElement.style.transform = "translateY(-2px)";
                });

                input.addEventListener("blur", () => {
                    input.parentElement.style.transform = "";
                });
            });

            // Particle Animation
            function createParticle() {
                const particle = document.createElement("div");
                particle.className = "particle";
                particle.style.left = Math.random() * 100 + "%";
                particle.style.top = Math.random() * 100 + "%";
                particle.style.animationDuration = Math.random() * 3 + 4 + "s";
                document.body.appendChild(particle);

                setTimeout(() => {
                    particle.remove();
                }, 6000);
            }

            // Create particles periodically
            setInterval(createParticle, 3000);
        </script>
    </body>
</html>
