<script>
// ================== DOM Elements ==================
const sidebar = document.getElementById("sidebar");
const sidebarOverlay = document.getElementById("sidebarOverlay");
const menuToggle = document.getElementById("menuToggle");
const sidebarClose = document.getElementById("sidebarClose");
const dashboardMain = document.getElementById("dashboardMain");
const themeToggle = document.getElementById("themeToggle");

// ================== State Management ==================
let isMobile = window.innerWidth <= 768;

// ================== Initialize Theme ==================
function initializeTheme() {
    // Check for saved theme preference or default to 'light'
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    
    // Update theme toggle icon
    if (themeToggle) {
        updateThemeIcon(savedTheme);
    }
}

function updateThemeIcon(theme) {
    if (themeToggle) {
        themeToggle.innerHTML = theme === 'dark' ? '🌞' : '🌙';
        themeToggle.setAttribute('title', theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode');
    }
}

// ================== Sidebar Functions ==================
function openSidebar() {
    if (sidebar) {
        sidebar.classList.add("open");
        sidebar.classList.remove("collapsed");
    }
    if (sidebarOverlay) {
        sidebarOverlay.classList.add("active");
    }
    document.body.style.overflow = "hidden";
    console.log("Sidebar opened");
}

function closeSidebar() {
    if (sidebar) {
        sidebar.classList.remove("open");
        if (isMobile) {
            sidebar.classList.add("collapsed");
        }
    }
    if (sidebarOverlay) {
        sidebarOverlay.classList.remove("active");
    }
    document.body.style.overflow = "";
    console.log("Sidebar closed");
}

function toggleSidebar() {
    console.log("Toggle sidebar called, isMobile:", isMobile);
    
    if (isMobile) {
        // Mobile behavior - show/hide with overlay
        if (sidebar && sidebar.classList.contains("open")) {
            closeSidebar();
        } else {
            openSidebar();
        }
    } else {
        // Desktop behavior - collapse/expand
        if (sidebar) {
            sidebar.classList.toggle("collapsed");
        }
        if (dashboardMain) {
            dashboardMain.classList.toggle("sidebar-collapsed");
        }
        console.log("Desktop sidebar toggled");
    }
}

// ================== Theme Toggle ==================
function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    
    console.log("Theme toggle clicked, changing from", currentTheme, "to", newTheme);
    
    // Update theme
    document.documentElement.setAttribute('data-theme', newTheme);
    
    // Save to localStorage
    localStorage.setItem('theme', newTheme);
    
    // Update icon
    updateThemeIcon(newTheme);
    
    // Update charts if they exist
    if (typeof updateChartColors === 'function') {
        setTimeout(updateChartColors, 100);
    }
}

// ================== Responsive Handler ==================
function handleResize() {
    const newIsMobile = window.innerWidth <= 768;
    
    if (newIsMobile !== isMobile) {
        isMobile = newIsMobile;
        console.log("Screen size changed, isMobile:", isMobile);
        
        if (isMobile) {
            // Switching to mobile
            if (sidebar) {
                sidebar.classList.add("collapsed");
                sidebar.classList.remove("open");
            }
            if (sidebarOverlay) {
                sidebarOverlay.classList.remove("active");
            }
            if (dashboardMain) {
                dashboardMain.classList.remove("sidebar-collapsed");
            }
            document.body.style.overflow = "";
        } else {
            // Switching to desktop
            if (sidebar) {
                sidebar.classList.remove("open", "collapsed");
            }
            if (sidebarOverlay) {
                sidebarOverlay.classList.remove("active");
            }
            if (dashboardMain) {
                dashboardMain.classList.remove("sidebar-collapsed");
            }
            document.body.style.overflow = "";
        }
    }
}

// ================== Event Listeners ==================
function setupEventListeners() {
    // Menu toggle button
    if (menuToggle) {
        menuToggle.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            console.log("Menu toggle clicked");
            toggleSidebar();
        });
    }

    // Sidebar close button
    if (sidebarClose) {
        sidebarClose.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            console.log("Sidebar close clicked");
            closeSidebar();
        });
    }

    // Overlay click
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener("click", (e) => {
            console.log("Overlay clicked");
            closeSidebar();
        });
    }

    // Theme toggle
    if (themeToggle) {
        themeToggle.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleTheme();
        });
    }

    // Window resize
    window.addEventListener("resize", handleResize);

    // Escape key to close sidebar
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && sidebar && sidebar.classList.contains("open")) {
            closeSidebar();
        }
    });

    // Prevent sidebar clicks from closing it
    if (sidebar) {
        sidebar.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    }
}

// ================== Other Features ==================
function setupOtherFeatures() {
    // Notifications
    const notificationBtn = document.getElementById("notificationBtn");
    if (notificationBtn) {
        notificationBtn.addEventListener("click", () => {
            alert("Notifications feature coming soon!");
        });
    }

    // Search
    const searchInput = document.querySelector(".search-input");
    if (searchInput) {
        searchInput.addEventListener("input", (e) => {
            console.log("Searching for:", e.target.value);
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    });
}

// ================== Animations ==================
function setupAnimations() {
    // Animate stat cards
    const statCards = document.querySelectorAll(".stat-card");
    statCards.forEach((card, i) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "all 0.6s ease";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, i * 100);
    });

    // Animate chart cards
    const chartCards = document.querySelectorAll(".chart-card");
    chartCards.forEach((card, i) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "all 0.6s ease";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, (statCards.length + i) * 100);
    });
}

// ================== Charts Setup (if needed) ==================
function setupCharts() {
    // Progress Chart
    const progressCanvas = document.getElementById("progressChart");
    let progressChart;
    if (progressCanvas && typeof Chart !== 'undefined') {
        try {
            const ctx = progressCanvas.getContext('2d');
            progressChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Progress',
                        data: [30, 45, 35, 50, 65, 80],
                        borderColor: '#667eea',
                        backgroundColor: 'rgba(102, 126, 234, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0,0,0,0.1)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        } catch (error) {
            console.log("Progress chart setup failed:", error);
        }
    }

    // Task Chart
    const taskCanvas = document.getElementById("taskChart");
    let taskChart;
    if (taskCanvas && typeof Chart !== 'undefined') {
        try {
            const ctx = taskCanvas.getContext('2d');
            taskChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'In Progress', 'Pending'],
                    datasets: [{
                        data: [60, 25, 15],
                        backgroundColor: ['#28c76f', '#667eea', '#ffd93d'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        }
                    }
                }
            });
        } catch (error) {
            console.log("Task chart setup failed:", error);
        }
    }

    // Update chart colors function
    window.updateChartColors = function() {
        const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        const textColor = isDark ? '#cbd5e0' : '#2d3748';
        const gridColor = isDark ? 'rgba(255,255,255,0.1)' : 'rgba(0,0,0,0.1)';

        if (progressChart) {
            progressChart.options.scales.y.ticks.color = textColor;
            progressChart.options.scales.x.ticks.color = textColor;
            progressChart.options.scales.y.grid.color = gridColor;
            progressChart.update();
        }

        if (taskChart) {
            taskChart.options.plugins.legend.labels.color = textColor;
            taskChart.update();
        }
    };
}

// ================== Initialization ==================
function initialize() {
    console.log("Initializing dashboard...");
    
    // Set initial mobile state
    isMobile = window.innerWidth <= 768;
    
    // Initialize theme
    initializeTheme();
    
    // Setup all event listeners
    setupEventListeners();
    
    // Setup other features
    setupOtherFeatures();
    
    // Setup animations
    setupAnimations();
    
    // Setup charts
    setupCharts();
    
    // Handle initial responsive state
    handleResize();
    
    console.log("Dashboard initialized successfully");
}

// ================== Document Ready ==================
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialize);
} else {
    initialize();
}

// ================== Theme Observer ==================
const themeObserver = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.type === 'attributes' && mutation.attributeName === 'data-theme') {
            if (typeof updateChartColors === 'function') {
                setTimeout(updateChartColors, 100);
            }
        }
    });
});

if (document.documentElement) {
    themeObserver.observe(document.documentElement, {
        attributes: true,
        attributeFilter: ['data-theme']
    });
}

</script>