 <script>
      // AOS init
      AOS.init({ once: true, duration: 700, easing: 'ease-out-cubic' });

      // Loading screen
      window.addEventListener('load', () => {
        setTimeout(() => document.querySelector('.loading')?.classList.add('hidden'), 900);
      });

      // Header effects
      const header = document.querySelector('header');
      const onScroll = () => { header.classList.toggle('scrolled', window.scrollY > 10); };
      window.addEventListener('scroll', onScroll); onScroll();

      // Theme toggle (persistent)
      const themeToggle = document.getElementById('themeToggle');
      const root = document.documentElement;
      const savedTheme = localStorage.getItem('theme');
      if (savedTheme) root.setAttribute('data-theme', savedTheme);
      const setIcon = () => themeToggle.innerHTML = root.getAttribute('data-theme') === 'dark' ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
      setIcon();
      themeToggle.addEventListener('click', () => {
        const current = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', current); localStorage.setItem('theme', current); setIcon();
      });

      // Mobile menu
      const menuToggle = document.getElementById('menuToggle');
      const navMenu = document.getElementById('navMenu');
      menuToggle.addEventListener('click', () => {
        const open = navMenu.classList.toggle('open');
        menuToggle.classList.toggle('active', open);
        menuToggle.setAttribute('aria-expanded', String(open));
      });
      // Close on link click
      navMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
        navMenu.classList.remove('open'); menuToggle.classList.remove('active'); menuToggle.setAttribute('aria-expanded', 'false');
      }));

      // Smooth scroll + active state
      document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
          const id = link.getAttribute('href');
          const el = document.querySelector(id);
          if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        })
      });

      // IntersectionObserver: reveal skill bars
      const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) { entry.target.classList.add('revealed'); }
        });
      }, { threshold: .35 });
      document.querySelectorAll('.skill').forEach(s => skillObserver.observe(s));

      // IntersectionObserver: timeline items
      const tObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
      }, { threshold: .15 });
      document.querySelectorAll('.t-item').forEach(i => tObserver.observe(i));

      // Contact form (demo only)
      const form = document.getElementById('contactForm');
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!form.reportValidity()) return;
        alert('Form submitted! (Demo)');
        form.reset();
      });
    </script>