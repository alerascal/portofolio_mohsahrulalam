
<script>

const sidebar = document.getElementById("sidebar");
const sidebarOverlay = document.getElementById("sidebarOverlay");
const menuToggle = document.getElementById("menuToggle");
const sidebarClose = document.getElementById("sidebarClose");
const dashboardMain = document.getElementById("dashboardMain");

function openSidebar() {
    sidebar.classList.add("open");
    sidebar.classList.remove("collapsed"); // Ensure not collapsed
    sidebarOverlay.classList.add("active");
    document.body.style.overflow = "hidden";
}

function closeSidebar() {
    sidebar.classList.remove("open");
    sidebar.classList.add("collapsed"); // Ensure collapsed in mobile
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
        sidebar.classList.toggle("collapsed");
        dashboardMain.classList.toggle("sidebar-collapsed");
    }
}

// Event listeners
if (menuToggle) {
    menuToggle.addEventListener("click", (e) => {
        e.preventDefault();
        console.log("Menu toggle clicked"); // For debugging
        toggleSidebar();
    });
}
if (sidebarClose) {
    sidebarClose.addEventListener("click", closeSidebar);
}
if (sidebarOverlay) {
    sidebarOverlay.addEventListener("click", closeSidebar);
}

// Handle resize to reset sidebar state
window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
        closeSidebar(); // Close mobile sidebar
        sidebar.classList.remove("collapsed"); // Show sidebar on desktop
        dashboardMain.classList.remove("sidebar-collapsed");
    } else {
        sidebar.classList.add("collapsed"); // Hide sidebar in mobile
        sidebar.classList.remove("open");
        sidebarOverlay.classList.remove("active");
        document.body.style.overflow = "";
    }
});

// Theme toggle (example, assuming you have a theme toggle button)
const themeToggle = document.getElementById("themeToggle");
if (themeToggle) {
    themeToggle.addEventListener("click", () => {
        document.documentElement.setAttribute(
            "data-theme",
            document.documentElement.getAttribute("data-theme") === "dark" ? "light" : "dark"
        );
    });
}

    // ================== Notifications, Search ==================
    const notificationBtn = document.getElementById("notificationBtn");
    if (notificationBtn) notificationBtn.addEventListener("click", () => alert("Notifications feature coming soon!"));
    const searchInput = document.querySelector(".search-input");
    if (searchInput) searchInput.addEventListener("input", e => console.log("Searching for:", e.target.value));

    // ================== Chart.js Progress & Task ==================
    const progressCanvas = document.getElementById("progressChart"); let progressChart;
    if (progressCanvas) { /* ... chart line progress seperti sebelumnya ... */ }
    const taskCanvas = document.getElementById("taskChart"); let taskChart;
    if (taskCanvas) { /* ... chart doughnut task seperti sebelumnya ... */ }

    const updateChartColors = () => { /* ... update warna chart sesuai tema ... */ };
    const observer = new MutationObserver(updateChartColors);
    observer.observe(html, { attributes: true, attributeFilter: ["data-theme"] });

    // ================== Animasi & Accessibility ==================
    const statCards = document.querySelectorAll(".stat-card");
    statCards.forEach((card, i) => { card.style.opacity = "0"; card.style.transform = "translateY(20px)"; setTimeout(() => { card.style.transition = "all 0.6s"; card.style.opacity = "1"; card.style.transform = "translateY(0)"; }, i * 100); });
    const chartCards = document.querySelectorAll(".chart-card");
    chartCards.forEach((card, i) => { card.style.opacity = "0"; card.style.transform = "translateY(20px)"; setTimeout(() => { card.style.transition = "all 0.6s"; card.style.opacity = "1"; card.style.transform = "translateY(0)"; }, (statCards.length + i) * 100); });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => anchor.addEventListener("click", function(e) { e.preventDefault(); const target = document.querySelector(this.getAttribute("href")); if (target) target.scrollIntoView({ behavior: "smooth", block: "start" }); }));
    document.addEventListener("keydown", (e) => { if (e.key === "Escape" && sidebar.classList.contains("open")) closeSidebar(); });
</script>
