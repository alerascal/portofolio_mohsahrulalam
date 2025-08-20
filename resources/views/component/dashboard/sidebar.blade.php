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
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects.index') }}" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <span>Tasks</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <span>Analytics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <span>Team</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span>Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="nav-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
