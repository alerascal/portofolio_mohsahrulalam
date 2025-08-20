<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Project Management Dashboard</title>
    <meta name="description" content="Login to access your project management dashboard">
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    
    <style>
        /* Reuse dashboard's CSS variables */
        :root {
            --primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --text-muted: #a0aec0;
            --bg-primary: #ffffff;
            --bg-secondary: #f7fafc;
            --bg-card: #ffffff;
            --border: #e2e8f0;
            --border-light: #f1f5f9;
            --radius: .5rem;
            --shadow-sm: 0 1px 3px rgba(0,0,0,.08), 0 1px 2px rgba(0,0,0,.06);
            --shadow-md: 0 10px 15px rgba(0,0,0,.07), 0 4px 6px rgba(0,0,0,.06);
            --transition: all .3s cubic-bezier(.4,0,.2,1);
        }

        html[data-theme="dark"] {
            --text-primary: #f7fafc;
            --text-secondary: #cbd5e0;
            --text-muted: #a0aec0;
            --bg-primary: #0f172a;
            --bg-secondary: #111827;
            --bg-card: #111827;
            --border: #24304a;
            --border-light: #1f2937;
            --shadow-sm: 0 1px 3px rgba(0,0,0,.3), 0 1px 2px rgba(0,0,0,.2);
            --shadow-md: 0 10px 15px rgba(0,0,0,.35), 0 4px 6px rgba(0,0,0,.25);
        }

        body {
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: var(--bg-secondary);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 10px; height: 10px; }
        ::-webkit-scrollbar-track { background: var(--bg-secondary); }
        ::-webkit-scrollbar-thumb { background: #667eea; border-radius: 999px; }

        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 24px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            margin: 16px;
            transition: var(--transition);
        }

        .login-container:hover {
            box-shadow: var(--shadow-lg);
        }

        .login-header {
            text-align: center;
            margin-bottom: 24px;
        }

        .login-title {
            font-size: 24px;
            font-weight: 800;
            margin: 0;
            background: var(--primary);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .form-group {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px 12px 40px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: var(--bg-primary);
            color: var(--text-primary);
            font: inherit;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
        }

        .form-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 16px;
        }

        .error-message {
            color: #ea4c89;
            font-size: 14px;
            margin-top: 8px;
            text-align: center;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding: 12px 16px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: 0;
            transition: var(--transition);
            font-size: 14px;
            color: #fff;
            background: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .theme-toggle {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: var(--bg-card);
            color: var(--text-primary);
            cursor: pointer;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        /* Responsive */
        @media (max-width: 640px) {
            .login-container {
                margin: 16px;
                padding: 16px;
            }

            .login-title {
                font-size: 20px;
            }

            .form-input {
                padding: 10px 16px 10px 36px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <button class="theme-toggle" id="themeToggle">
            <i class="fas fa-moon"></i>
        </button>
        <div class="login-header">
            <h2 class="login-title">Login</h2>
        </div>
        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('login.post') }}" class="login-form">
            @csrf
            <div class="form-group">
                <i class="fas fa-envelope form-icon"></i>
                <input type="email" name="email" class="form-input" placeholder="Email" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <i class="fas fa-lock form-icon"></i>
                <input type="password" name="password" class="form-input" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;

        themeToggle.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', currentTheme);
            themeToggle.querySelector('i').className = currentTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        });
    </script>
</body>
</html>