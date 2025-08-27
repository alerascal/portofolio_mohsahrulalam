<!-- Header -->
<header class="header">
    <div class="header-left">
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        <h1>Welcome back, {{ Auth::user()->name }}!</h1>
    </div>

    <div class="header-right">
        <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input
                type="text"
                class="search-input"
                placeholder="Search projects, tasks..."
            />
        </div>
        <button class="icon-btn" id="notificationBtn">
            <i class="fas fa-bell"></i>
        </button>
        <button class="icon-btn" id="themeToggle">
            <i class="fas fa-moon"></i>
        </button>
    </div>
</header>
