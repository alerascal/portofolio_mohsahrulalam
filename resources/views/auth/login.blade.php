<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Project Management Dashboard</title>
    <meta name="description" content="Login to access your project management dashboard" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --text-muted: #a0aec0;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-card: rgba(255, 255, 255, 0.97);
            --border: #e2e8f0;
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.22);
            --shadow-md: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 24px 60px rgba(0, 0, 0, 0.14);
            --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            --bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        html[data-theme="dark"] {
            --text-primary: #f7fafc;
            --text-secondary: #cbd5e0;
            --text-muted: #718096;
            --bg-primary: #0f172a;
            --bg-secondary: #1a202c;
            --bg-card: rgba(22, 28, 42, 0.97);
            --border: #2d3748;
            --glass-bg: rgba(255, 255, 255, 0.06);
            --glass-border: rgba(255, 255, 255, 0.12);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: var(--bg-secondary);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated radial background */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(102,126,234,.18) 0%, transparent 55%),
                radial-gradient(circle at 80% 20%, rgba(118,75,162,.18) 0%, transparent 55%),
                radial-gradient(circle at 40% 80%, rgba(240,147,251,.14) 0%, transparent 55%);
            animation: bgMove 22s ease-in-out infinite;
            z-index: -2;
        }

        @keyframes bgMove {
            0%, 100% { transform: translate(0, 0); }
            33%       { transform: translate(28px, -28px); }
            66%       { transform: translate(-18px, 18px); }
        }

        /* Floating particles */
        .particle {
            position: fixed;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            pointer-events: none;
            z-index: -1;
            opacity: 0;
            animation: pFloat 7s ease-in-out infinite;
        }

        @keyframes pFloat {
            0%   { transform: translateY(0) scale(1);   opacity: 0; }
            15%  { opacity: .55; }
            50%  { transform: translateY(-110px) scale(1.4); opacity: .8; }
            85%  { opacity: .3; }
            100% { transform: translateY(-220px) scale(.6); opacity: 0; }
        }

        /* Card */
        .login-container {
            width: 100%;
            max-width: 430px;
            margin: 20px;
            padding: 42px 36px;
            background: var(--bg-card);
            backdrop-filter: blur(24px);
            border: 1px solid var(--glass-border);
            border-radius: 26px;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
            animation: slideUp .75s var(--bounce) forwards;
            transform: translateY(28px);
            opacity: 0;
        }

        /* Top shimmer line */
        .login-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 3px;
            background: var(--primary-gradient);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes slideUp  { to { transform: translateY(0); opacity: 1; } }
        @keyframes shimmer  { 0% { left: -100%; } 100% { left: 200%; } }

        /* Theme toggle */
        .theme-toggle {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            border: 1.5px solid var(--glass-border);
            background: var(--glass-bg);
            color: var(--text-primary);
            cursor: pointer;
            font-size: 17px;
            transition: var(--transition);
            backdrop-filter: blur(8px);
            animation: fadeIn .8s ease .2s both;
        }

        .theme-toggle:hover {
            transform: translateY(-2px) rotate(12deg);
            background: var(--accent-gradient);
            color: #fff;
            border-color: transparent;
        }

        /* Header */
        .login-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn .8s ease .3s both;
        }

        .login-title {
            font-size: 30px;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
            line-height: 1.2;
        }

        .login-subtitle {
            color: var(--text-secondary);
            font-size: 13.5px;
            font-weight: 500;
            line-height: 1.5;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Error box — hidden by default, only shown when needed */
        .error-message {
            display: none; /* hidden unless .show is added */
            color: #e53e5a;
            font-size: 13.5px;
            text-align: center;
            padding: 11px 14px;
            background: rgba(229, 62, 90, .1);
            border-radius: 13px;
            border-left: 4px solid #e53e5a;
            margin-bottom: 18px;
            animation: shake .45s ease;
        }

        .error-message.show { display: block; }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25%       { transform: translateX(-6px); }
            75%       { transform: translateX(6px); }
        }

        /* Form */
        .login-form { display: flex; flex-direction: column; gap: 18px; }

        .form-group {
            animation: fadeIn .8s ease both;
        }

        .form-group:nth-child(1) { animation-delay: .38s; }
        .form-group:nth-child(2) { animation-delay: .48s; }
        .form-group:nth-child(3) { animation-delay: .56s; }
        .form-group:nth-child(4) { animation-delay: .64s; }

        /* BUG FIX: icon BEFORE input in DOM — input must come first so
           the CSS sibling selector (.form-input:focus + .form-icon) works.
           The visual order is handled purely with absolute positioning. */
        .form-input {
            width: 100%;
            padding: 15px 18px 15px 48px;
            border: 2px solid var(--border);
            border-radius: 15px;
            background: var(--bg-primary);
            color: var(--text-primary);
            font: inherit;
            font-size: 15px;
            transition: var(--transition);
            position: relative;
            z-index: 1;
        }

        .form-input::placeholder { color: var(--text-muted); }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 5px rgba(102,126,234,.13);
            transform: translateY(-2px);
        }

        /* Highlight icon when input is focused */
        .form-input:focus ~ .form-icon { color: #667eea; transform: translateY(-50%) scale(1.12); }

        /* Validation error state */
        .form-input.invalid {
            border-color: #e53e5a;
            box-shadow: 0 0 0 5px rgba(229,62,90,.1);
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 17px;
            transition: var(--transition);
            pointer-events: none;
            /* BUG FIX: icon is a sibling AFTER input in DOM but rendered
               visually on the left thanks to absolute positioning */
        }

        /* Wrapper khusus input + icon + tombol mata agar top:50% selalu
           mengacu pada tinggi input saja, bukan seluruh .form-group */
        .input-wrap {
            position: relative;
        }

        /* Show/hide password button */
        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            font-size: 16px;
            padding: 6px;
            border-radius: 8px;
            transition: var(--transition);
            z-index: 5;
            line-height: 1;
            display: flex;
            align-items: center;
        }

        .password-toggle:hover { color: #667eea; }

        /* Inline field hint */
        .field-hint {
            font-size: 12px;
            color: #e53e5a;
            margin-top: 5px;
            display: none;
            padding-left: 4px;
        }

        .field-hint.show { display: block; }

        /* Remember me */
        .remember-row {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 13.5px;
            color: var(--text-secondary);
            cursor: pointer;
        }

        .remember-row input[type=checkbox] {
            width: 17px;
            height: 17px;
            accent-color: #667eea;
            cursor: pointer;
            border-radius: 5px;
            flex-shrink: 0;
        }

        /* Submit button */
        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            padding: 15px 22px;
            border-radius: 15px;
            border: 0;
            font: inherit;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            background: var(--primary-gradient);
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(102,126,234,.35);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .btn::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,.18), transparent);
            transform: translateX(-100%);
            transition: transform .6s ease;
        }

        .btn:hover  { transform: translateY(-3px); box-shadow: 0 15px 36px rgba(102,126,234,.45); }
        .btn:hover::after { transform: translateX(100%); }
        .btn:active { transform: translateY(-1px); }
        .btn:disabled { opacity: .7; cursor: not-allowed; transform: none; }

        /* Spinner inside button (loading state) */
        .btn-spinner {
            width: 18px;
            height: 18px;
            border: 2.5px solid rgba(255,255,255,.35);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin .7s linear infinite;
            display: none;
            flex-shrink: 0;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        .btn.loading .btn-spinner { display: block; }
        .btn.loading .btn-label   { opacity: .75; }

        /* Accessibility */
        .btn:focus-visible,
        .theme-toggle:focus-visible { outline: 2px solid #667eea; outline-offset: 2px; }
        .form-input:focus-visible { outline: none; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 7px; }
        ::-webkit-scrollbar-track { background: var(--bg-secondary); border-radius: 4px; }
        ::-webkit-scrollbar-thumb { background: var(--primary-gradient); border-radius: 4px; }

        /* Hover lift on card (pointer devices only) */
        @media (hover: hover) {
            .login-container:hover {
                transform: translateY(-4px);
                box-shadow: 0 30px 60px rgba(0,0,0,.18);
            }
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container { margin: 14px; padding: 32px 22px; border-radius: 20px; }
            .login-title { font-size: 26px; }
            .form-input  { padding: 13px 15px 13px 42px; font-size: 15px; }
            .form-icon   { left: 13px; font-size: 16px; }
            .theme-toggle { width: 40px; height: 40px; top: 14px; right: 14px; }
        }

        @media (max-width: 320px) {
            .login-container { padding: 24px 16px; }
            .login-title { font-size: 22px; }
        }
    </style>
</head>
<body>

    <!-- Static particles (animated via CSS) -->
    <div class="particle" style="top:75%;left:8%;animation-delay:0s"></div>
    <div class="particle" style="top:60%;left:88%;animation-delay:-2.5s"></div>
    <div class="particle" style="top:85%;left:50%;animation-delay:-4.5s"></div>

    <div class="login-container">

        <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
            <i class="fas fa-moon" id="themeIcon"></i>
        </button>

        <div class="login-header">
            <h1 class="login-title">Selamat Datang</h1>
            <p class="login-subtitle">Silakan login untuk mengelola portofolio Anda</p>
        </div>

        {{-- BUG FIX: error box always rendered but HIDDEN (display:none via CSS).
             The .show class is toggled by Laravel or JS — no empty-but-visible div. --}}
        <div class="error-message{{ $errors->any() ? ' show' : '' }}" id="errorMessage" role="alert">
            <i class="fas fa-circle-exclamation" aria-hidden="true" style="margin-right:6px"></i>
            <span id="errorText">{{ $errors->first() }}</span>
        </div>

        <form
            class="login-form"
            id="loginForm"
            action="{{ route('login.post') }}"
            method="POST"
            novalidate
        >
            @csrf

            {{-- Email --}}
            <div class="form-group">
                <div class="input-wrap">
                    <input
                        class="form-input{{ $errors->has('email') ? ' invalid' : '' }}"
                        type="email"
                        name="email"
                        id="emailInput"
                        placeholder="Masukkan email Anda"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        required
                    />
                    <i class="fas fa-envelope form-icon" aria-hidden="true"></i>
                </div>
                <p class="field-hint" id="emailHint">Masukkan alamat email yang valid.</p>
            </div>

            {{-- Password --}}
            <div class="form-group">
                <div class="input-wrap">
                    <input
                        class="form-input{{ $errors->has('password') ? ' invalid' : '' }}"
                        type="password"
                        name="password"
                        id="passwordInput"
                        placeholder="Masukkan password Anda"
                        autocomplete="current-password"
                        style="padding-right: 48px"
                        required
                    />
                    <i class="fas fa-lock form-icon" aria-hidden="true"></i>
                    <button
                        type="button"
                        class="password-toggle"
                        id="passwordToggle"
                        aria-label="Tampilkan password"
                    >
                        <i class="fas fa-eye" id="passwordToggleIcon"></i>
                    </button>
                </div>
                <p class="field-hint" id="passwordHint">Password tidak boleh kosong.</p>
            </div>

            {{-- Remember me (new feature) --}}
            <div class="form-group">
                <label class="remember-row">
                    <input type="checkbox" name="remember" id="rememberMe" />
                    Ingat saya di perangkat ini
                </label>
            </div>

            <button type="submit" class="btn" id="submitBtn">
                <div class="btn-spinner" id="btnSpinner" aria-hidden="true"></div>
                <span class="btn-label" id="btnLabel">
                    <i class="fas fa-right-to-bracket" aria-hidden="true" style="margin-right:7px"></i>Masuk
                </span>
            </button>

        </form>
    </div>

    <script>
        /* ── Theme toggle ─────────────────────────────────── */
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon   = document.getElementById('themeIcon');
        const html        = document.documentElement;

        const savedTheme  = localStorage.getItem('theme') || 'light';
        html.setAttribute('data-theme', savedTheme);
        setIcon(savedTheme);

        themeToggle.addEventListener('click', () => {
            const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
            setIcon(next);
        });

        function setIcon(theme) {
            themeIcon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }

        /* ── Show / hide password ─────────────────────────── */
        const passwordInput      = document.getElementById('passwordInput');
        const passwordToggle     = document.getElementById('passwordToggle');
        const passwordToggleIcon = document.getElementById('passwordToggleIcon');

        passwordToggle.addEventListener('click', () => {
            const showing = passwordInput.type === 'text';
            passwordInput.type              = showing ? 'password' : 'text';
            passwordToggleIcon.className    = showing ? 'fas fa-eye' : 'fas fa-eye-slash';
            passwordToggle.setAttribute('aria-label', showing ? 'Tampilkan password' : 'Sembunyikan password');
        });

        /* ── Client-side validation ───────────────────────── */
        const emailInput    = document.getElementById('emailInput');
        const emailHint     = document.getElementById('emailHint');
        const passwordHint  = document.getElementById('passwordHint');
        const errorMessage  = document.getElementById('errorMessage');
        const errorText     = document.getElementById('errorText');
        const submitBtn     = document.getElementById('submitBtn');
        const btnSpinner    = document.getElementById('btnSpinner');
        const btnLabel      = document.getElementById('btnLabel');

        function validateEmail() {
            const valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim());
            emailInput.classList.toggle('invalid', !valid);
            emailHint.classList.toggle('show', !valid);
            return valid;
        }

        function validatePassword() {
            const valid = passwordInput.value.length > 0;
            passwordInput.classList.toggle('invalid', !valid);
            passwordHint.classList.toggle('show', !valid);
            return valid;
        }

        /* Clear errors on input */
        emailInput.addEventListener('input', () => {
            emailInput.classList.remove('invalid');
            emailHint.classList.remove('show');
        });

        passwordInput.addEventListener('input', () => {
            passwordInput.classList.remove('invalid');
            passwordHint.classList.remove('show');
        });

        /* Validate on blur for early feedback */
        emailInput.addEventListener('blur', validateEmail);
        passwordInput.addEventListener('blur', validatePassword);

        /* ── Form submit: validate + loading state ────────── */
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            const emailOk    = validateEmail();
            const passwordOk = validatePassword();

            if (!emailOk || !passwordOk) {
                e.preventDefault();
                return;
            }

            /* Show loading state while form submits */
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
            btnSpinner.style.display = 'block';
            btnLabel.innerHTML = 'Memproses...';
        });

        /* ── BUG FIX: Particle cap — max 6 at once ───────── */
        let particleCount = 0;

        function spawnParticle() {
            if (particleCount >= 6) return;
            particleCount++;

            const p = document.createElement('div');
            p.className = 'particle';
            p.style.left              = (Math.random() * 95)   + '%';
            p.style.top               = (Math.random() * 75 + 10) + '%';
            p.style.animationDuration = (Math.random() * 3 + 5)  + 's';
            p.style.animationDelay    = (Math.random() * 1.5)    + 's';
            document.body.appendChild(p);

            setTimeout(() => {
                p.remove();
                particleCount--;
            }, 8500);
        }

        setInterval(spawnParticle, 3500);
    </script>
</body>
</html>
