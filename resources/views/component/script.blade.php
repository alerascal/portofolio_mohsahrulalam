<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // ================= AOS INIT =================
    AOS.init({ once: true, duration: 700, easing: "ease-out-cubic" });

    // ================= LOADING SCREEN =================
    setTimeout(() => document.querySelector(".loading")?.classList.add("hidden"), 900);

    // ================= HEADER SCROLL EFFECT =================
    const header = document.querySelector("header");
    const onScroll = () => header.classList.toggle("scrolled", window.scrollY > 10);
    window.addEventListener("scroll", onScroll);
    onScroll();

    // ================= THEME TOGGLE =================
    const themeToggle = document.getElementById("themeToggle");
    const root = document.documentElement;
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) root.setAttribute("data-theme", savedTheme);
    const setIcon = () => {
        themeToggle.innerHTML = root.getAttribute("data-theme") === "dark"
            ? '<i class="fas fa-sun"></i>'
            : '<i class="fas fa-moon"></i>';
    };
    setIcon();
    themeToggle.addEventListener("click", () => {
        const current = root.getAttribute("data-theme") === "dark" ? "light" : "dark";
        root.setAttribute("data-theme", current);
        localStorage.setItem("theme", current);
        setIcon();
    });

    // ================= MOBILE MENU =================
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");
    menuToggle.addEventListener("click", () => {
        const open = navMenu.classList.toggle("open");
        menuToggle.classList.toggle("active", open);
        menuToggle.setAttribute("aria-expanded", String(open));
    });
    navMenu.querySelectorAll("a").forEach((a) =>
        a.addEventListener("click", () => {
            navMenu.classList.remove("open");
            menuToggle.classList.remove("active");
            menuToggle.setAttribute("aria-expanded", "false");
        })
    );

    // ================= SMOOTH SCROLL =================
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener("click", (e) => {
            const id = link.getAttribute("href");
            const el = document.querySelector(id);
            if (el) {
                e.preventDefault();
                el.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });

    // ================= INTERSECTION OBSERVER =================
    // Skill bars
    const skillObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) entry.target.classList.add("revealed");
            });
        },
        { threshold: 0.35 }
    );
    document.querySelectorAll(".skill").forEach((s) => skillObserver.observe(s));

    // Timeline items
    const tObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) entry.target.classList.add("visible");
            });
        },
        { threshold: 0.15 }
    );
    document.querySelectorAll(".t-item").forEach((i) => tObserver.observe(i));

    // ================= CONTACT FORM (DEMO) =================
    const form = document.getElementById("contactForm");
    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            if (!form.reportValidity()) return;
            alert("Form submitted! (Demo)");
            form.reset();
        });
    }

    // ================= LIGHTBOX HELPER =================
    function setupLightbox(imgSelector, modalId, modalImgId, closeId) {
        const img = document.querySelector(imgSelector);
        const modal = document.getElementById(modalId);
        const modalImg = document.getElementById(modalImgId);
        const close = document.getElementById(closeId);

        if (!img || !modal || !modalImg || !close) return;

        img.style.cursor = "pointer";
        img.addEventListener("click", () => {
            modal.style.display = "block";
            modalImg.src = img.src;
        });

        close.addEventListener("click", () => (modal.style.display = "none"));

        modal.addEventListener("click", (e) => {
            if (e.target === modal) modal.style.display = "none";
        });
    }

    // ================= LIGHTBOX ABOUT IMAGE =================
    setupLightbox("#aboutImg", "imgModal", "modalImg", "closeModal");

    // ================= LIGHTBOX PROJECT IMAGES =================
    const projectModal = document.getElementById("lightboxModal");
    const projectImg = document.getElementById("lightboxImage");
    const projectCaption = document.getElementById("caption");
    const projectClose = document.querySelector("#lightboxModal .close");

    if (projectModal && projectImg && projectClose) {
        document.querySelectorAll(".projects .cover img").forEach((img) => {
            img.style.cursor = "pointer";
            img.addEventListener("click", () => {
                projectModal.style.display = "block";
                projectImg.src = img.src;
                projectCaption.innerHTML = img.alt;
            });
        });

        projectClose.addEventListener("click", () => (projectModal.style.display = "none"));
        projectModal.addEventListener("click", (e) => {
            if (e.target === projectModal) projectModal.style.display = "none";
        });

        // Touch swipe close for mobile
        let touchStartY = 0;
        projectModal.addEventListener("touchstart", (e) => {
            touchStartY = e.changedTouches[0].screenY;
        });
        projectModal.addEventListener("touchend", (e) => {
            const touchEndY = e.changedTouches[0].screenY;
            if (Math.abs(touchStartY - touchEndY) > 100) {
                projectModal.style.display = "none";
            }
        });
    }

    // ================= HERO TYPING EFFECT =================
    if (document.querySelector("#typed-title") && document.querySelector("#typed-desc")) {
        new Typed("#typed-title", {
            strings: ["{{ $hero->title }}"],
            typeSpeed: 70,
            backSpeed: 50,
            loop: true,
            backDelay: 1000,
            startDelay: 500,
        });

        new Typed("#typed-desc", {
            strings: ["{{ $hero->desc }}"],
            typeSpeed: 40,
            backSpeed: 0,
            showCursor: false,
            loop: false
        });
    }
});

</script>
