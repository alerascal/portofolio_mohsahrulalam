<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">Dashboard</div>
        <button class="sidebar-close" id="sidebarClose">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <nav>
        <ul class="nav-menu">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Projects -->
            <li class="nav-item">
                <a href="{{ route('projects.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <span>Projects</span>
                </a>
            </li>

            <!-- Hero Section -->
            <li class="nav-item">
                <a href="{{ route('hero.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <span>Hero Section</span>
                </a>
            </li>

            <!-- About -->
            <li class="nav-item">
                <a href="{{ route('about.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <span>About</span>
                </a>
            </li>

            <!-- Skills -->
            <li class="nav-item">
                <a href="{{ route('skills.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <span>Skills</span>
                </a>
            </li>

            <!-- Calendar -->
            <li class="nav-item">
                <a href="{{ route('calendar.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <span>Calendar</span>
                </a>
            </li>

            <!-- Experiences -->
            <li class="nav-item">
                <a href="{{ route('experiences.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <span>Experience</span>
                </a>
            </li>
            <!-- Contact Management -->
            <li class="nav-item">
                <a href="{{ route('contacts.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <span>Contacts</span>
                </a>
            </li>

            <!-- Social Links -->
            <li class="nav-item">
                <a href="{{ route('social_links.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <span>Social Links</span>
                </a>
            </li>
            <!-- Settings -->
            <li class="nav-item">
                <a href="{{ route('settings.index') }}" class="nav-link">
                    <div class="nav-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
