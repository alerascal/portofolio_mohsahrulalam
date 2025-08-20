   <script>
            // Sidebar Toggle Functionality
            const sidebar = document.getElementById("sidebar");
            const sidebarOverlay = document.getElementById("sidebarOverlay");
            const menuToggle = document.getElementById("menuToggle");
            const sidebarClose = document.getElementById("sidebarClose");
            const dashboardMain = document.getElementById("dashboardMain");

            function openSidebar() {
                sidebar.classList.add("open");
                sidebarOverlay.classList.add("active");
                document.body.style.overflow = "hidden";
            }

            function closeSidebar() {
                sidebar.classList.remove("open");
                sidebarOverlay.classList.remove("active");
                document.body.style.overflow = "";
            }

            function toggleSidebar() {
                if (window.innerWidth <= 768) {
                    if (sidebar.classList.contains("open")) {
                        closeSidebar();
                    } else {
                        openSidebar();
                    }
                } else {
                    // Desktop toggle
                    sidebar.classList.toggle("collapsed");
                    dashboardMain.classList.toggle("sidebar-collapsed");
                }
            }

            menuToggle.addEventListener("click", toggleSidebar);
            sidebarClose.addEventListener("click", closeSidebar);
            sidebarOverlay.addEventListener("click", closeSidebar);

            // Close sidebar when clicking nav links on mobile
            const navLinks = document.querySelectorAll(".nav-link");
            navLinks.forEach((link) => {
                link.addEventListener("click", (e) => {
                    if (window.innerWidth <= 768) {
                        closeSidebar();
                    }

                    // Update active state
                    navLinks.forEach((l) => l.classList.remove("active"));
                    link.classList.add("active");
                });
            });

            // Handle window resize
            window.addEventListener("resize", () => {
                if (window.innerWidth > 768) {
                    closeSidebar();
                    sidebar.classList.remove("collapsed");
                    dashboardMain.classList.remove("sidebar-collapsed");
                }
            });

            // Theme Toggle
            const themeToggle = document.getElementById("themeToggle");
            const html = document.documentElement;

            // Load saved theme
            const savedTheme = localStorage.getItem("theme") || "light";
            html.setAttribute("data-theme", savedTheme);
            themeToggle.querySelector("i").className =
                savedTheme === "dark" ? "fas fa-sun" : "fas fa-moon";

            themeToggle.addEventListener("click", () => {
                const currentTheme =
                    html.getAttribute("data-theme") === "dark"
                        ? "light"
                        : "dark";
                html.setAttribute("data-theme", currentTheme);
                localStorage.setItem("theme", currentTheme);
                themeToggle.querySelector("i").className =
                    currentTheme === "dark" ? "fas fa-sun" : "fas fa-moon";
            });

            // Notification Button
            const notificationBtn = document.getElementById("notificationBtn");
            notificationBtn.addEventListener("click", () => {
                alert("Notifications feature coming soon!");
            });

            // Search functionality
            const searchInput = document.querySelector(".search-input");
            searchInput.addEventListener("input", (e) => {
                // Placeholder for search functionality
                console.log("Searching for:", e.target.value);
            });

            // Chart.js Configuration for Project Progress (Line Chart)
            const progressChart = new Chart(
                document.getElementById("progressChart"),
                {
                    type: "line",
                    data: {
                        labels: [
                            "Jan",
                            "Feb",
                            "Mar",
                            "Apr",
                            "May",
                            "Jun",
                            "Jul",
                            "Aug",
                        ],
                        datasets: [
                            {
                                label: "Project Progress",
                                data: [10, 20, 35, 45, 60, 70, 85, 90],
                                borderColor: "#667eea",
                                backgroundColor: "rgba(102, 126, 234, 0.2)",
                                fill: true,
                                tension: 0.4,
                                pointBackgroundColor: "#667eea",
                                pointBorderColor: "#ffffff",
                                pointBorderWidth: 2,
                                pointRadius: 6,
                                pointHoverRadius: 8,
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true,
                                position: "top",
                                labels: {
                                    color: getComputedStyle(
                                        document.documentElement
                                    ).getPropertyValue("--text-primary"),
                                    usePointStyle: true,
                                    padding: 20,
                                },
                            },
                            tooltip: {
                                backgroundColor: "rgba(0, 0, 0, 0.8)",
                                titleColor: "#ffffff",
                                bodyColor: "#ffffff",
                                borderColor: "#667eea",
                                borderWidth: 1,
                            },
                        },
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                },
                                ticks: {
                                    color: getComputedStyle(
                                        document.documentElement
                                    ).getPropertyValue("--text-secondary"),
                                    font: {
                                        size: 12,
                                        weight: 500,
                                    },
                                },
                            },
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: getComputedStyle(
                                        document.documentElement
                                    ).getPropertyValue("--border-light"),
                                    drawBorder: false,
                                },
                                ticks: {
                                    color: getComputedStyle(
                                        document.documentElement
                                    ).getPropertyValue("--text-secondary"),
                                    font: {
                                        size: 12,
                                        weight: 500,
                                    },
                                    callback: function (value) {
                                        return value + "%";
                                    },
                                },
                            },
                        },
                        interaction: {
                            intersect: false,
                            mode: "index",
                        },
                    },
                }
            );

            // Chart.js Configuration for Task Distribution (Doughnut Chart)
            const taskChart = new Chart(document.getElementById("taskChart"), {
                type: "doughnut",
                data: {
                    labels: ["Completed", "In Progress", "Pending", "Review"],
                    datasets: [
                        {
                            data: [50, 30, 10, 10],
                            backgroundColor: [
                                "#28c76f",
                                "#ffd93d",
                                "#ea4c89",
                                "#4facfe",
                            ],
                            borderWidth: 3,
                            borderColor: getComputedStyle(
                                document.documentElement
                            ).getPropertyValue("--bg-card"),
                            hoverBorderWidth: 4,
                            hoverOffset: 10,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: "60%",
                    plugins: {
                        legend: {
                            position: "bottom",
                            labels: {
                                color: getComputedStyle(
                                    document.documentElement
                                ).getPropertyValue("--text-primary"),
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 12,
                                    weight: 500,
                                },
                            },
                        },
                        tooltip: {
                            backgroundColor: "rgba(0, 0, 0, 0.8)",
                            titleColor: "#ffffff",
                            bodyColor: "#ffffff",
                            borderColor: "#667eea",
                            borderWidth: 1,
                            callbacks: {
                                label: function (context) {
                                    const label = context.label || "";
                                    const value = context.parsed;
                                    const total = context.dataset.data.reduce(
                                        (a, b) => a + b,
                                        0
                                    );
                                    const percentage = (
                                        (value / total) *
                                        100
                                    ).toFixed(1);
                                    return `${label}: ${value} (${percentage}%)`;
                                },
                            },
                        },
                    },
                },
            });

            // Update chart colors when theme changes
            const updateChartColors = () => {
                const textPrimary = getComputedStyle(
                    document.documentElement
                ).getPropertyValue("--text-primary");
                const textSecondary = getComputedStyle(
                    document.documentElement
                ).getPropertyValue("--text-secondary");
                const borderLight = getComputedStyle(
                    document.documentElement
                ).getPropertyValue("--border-light");
                const bgCard = getComputedStyle(
                    document.documentElement
                ).getPropertyValue("--bg-card");

                // Update Progress Chart
                progressChart.options.scales.x.ticks.color = textSecondary;
                progressChart.options.scales.y.ticks.color = textSecondary;
                progressChart.options.scales.y.grid.color = borderLight;
                progressChart.options.plugins.legend.labels.color = textPrimary;
                progressChart.update("none");

                // Update Task Chart
                taskChart.data.datasets[0].borderColor = bgCard;
                taskChart.options.plugins.legend.labels.color = textPrimary;
                taskChart.update("none");
            };

            // Observe theme changes
            const observer = new MutationObserver(updateChartColors);
            observer.observe(html, {
                attributes: true,
                attributeFilter: ["data-theme"],
            });

            // Add loading states and animations
            document.addEventListener("DOMContentLoaded", () => {
                // Animate stats cards on load
                const statCards = document.querySelectorAll(".stat-card");
                statCards.forEach((card, index) => {
                    card.style.opacity = "0";
                    card.style.transform = "translateY(20px)";
                    setTimeout(() => {
                        card.style.transition =
                            "all 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }, index * 100);
                });

                // Animate chart cards
                const chartCards = document.querySelectorAll(".chart-card");
                chartCards.forEach((card, index) => {
                    card.style.opacity = "0";
                    card.style.transform = "translateY(20px)";
                    setTimeout(() => {
                        card.style.transition =
                            "all 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }, (statCards.length + index) * 100);
                });
            });

            // Add smooth scrolling for internal links
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    const target = document.querySelector(
                        this.getAttribute("href")
                    );
                    if (target) {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });
                    }
                });
            });

            // Add keyboard navigation support
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && sidebar.classList.contains("open")) {
                    closeSidebar();
                }
            });

            // Add focus management for accessibility
            menuToggle.addEventListener("click", () => {
                if (
                    window.innerWidth <= 768 &&
                    sidebar.classList.contains("open")
                ) {
                    // Focus first nav link when opening sidebar on mobile
                    setTimeout(() => {
                        const firstNavLink = sidebar.querySelector(".nav-link");
                        if (firstNavLink) firstNavLink.focus();
                    }, 300);
                }
            });
        </script>