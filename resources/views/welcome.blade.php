@extends('layouts.frontend')

@section('title', 'Home - Moh Sahrul Alamsyah')

@section('content')
<!-- Hero -->
    <section id="home" class="hero">
      <div class="container content" data-aos="fade-up" data-aos-duration="900">
        <span class="badge">Full Stack Developer</span>
        <h1 class="title gradient-text">Moh Sahrul Alamsyah</h1>
        <h2 class="subtitle">Crafting Modern Web Solutions</h2>
        <p class="desc">Passionate about building scalable, user-friendly applications with cutting-edge technologies.</p>
        <div class="actions">
          <a class="btn btn-primary" href="#contact"><i class="fas fa-envelope"></i> Hire Me</a>
          <a class="btn btn-secondary" href="#projects"><i class="fas fa-briefcase"></i> View Projects</a>
        </div>
        <div class="stats">
          <div class="stat" style="animation-delay: .05s">
            <strong>5+</strong>
            <span>Years Experience</span>
          </div>
          <div class="stat" style="animation-delay: .1s">
            <strong>30+</strong>
            <span>Projects Completed</span>
          </div>
          <div class="stat" style="animation-delay: .15s">
            <strong>10+</strong>
            <span>Happy Clients</span>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="badge">About Me</span>
          <h2 class="section-title gradient-text">Who I Am</h2>
          <p class="section-desc">A dedicated Full Stack Developer with a passion for creating innovative web solutions.</p>
        </div>
        <div class="about">
          <div data-aos="fade-right" data-aos-duration="900">
            <h3 class="section-subtitle" style="font-size:28px; font-weight:800; margin:0 0 12px">My Journey</h3>
            <p class="muted" style="font-size:18px">I'm Moh Sahrul Alamsyah, a Full Stack Developer with over 5 years of experience in building web applications. I specialize in creating seamless, user-friendly interfaces and robust backend systems.</p>
            <div class="features" style="display:grid; gap:12px; margin-top:16px">
              <div class="feature" data-aos="zoom-in" data-aos-delay="100">
                <div class="ico"><i class="fas fa-code"></i></div>
                <span><strong>Clean & Efficient Code</strong></span>
              </div>
              <div class="feature" data-aos="zoom-in" data-aos-delay="200">
                <div class="ico" style="background: var(--secondary);"><i class="fas fa-rocket"></i></div>
                <span><strong>Fast & Scalable Solutions</strong></span>
              </div>
              <div class="feature" data-aos="zoom-in" data-aos-delay="300">
                <div class="ico" style="background: var(--accent);"><i class="fas fa-users"></i></div>
                <span><strong>User-Centric Design</strong></span>
              </div>
            </div>
          </div>
          <div class="about-visual" data-aos="fade-left" data-aos-duration="900">
            <img src="https://images.unsplash.com/photo-1522444195799-478538b28823?q=80&w=1400&auto=format&fit=crop" alt="Moh Sahrul Alamsyah" />
          </div>
        </div>
      </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="badge">Skills</span>
          <h2 class="section-title gradient-text">My Expertise</h2>
          <p class="section-desc">A comprehensive set of tools and technologies I use to build modern web applications.</p>
        </div>
        <div class="skills-grid" id="skillsGrid">
          <article class="skill" data-aos="flip-left" style="--w: 90%">
            <div class="head"><div class="icon"><i class="fas fa-code"></i></div><h3>Frontend</h3></div>
            <div class="skill-item"><span>React.js</span><div class="bar"><i style="--w:90%"></i></div></div>
            <div class="skill-item"><span>Vue.js</span><div class="bar"><i style="--w:80%"></i></div></div>
            <div class="skill-item"><span>TypeScript</span><div class="bar"><i style="--w:85%"></i></div></div>
          </article>
          <article class="skill" data-aos="flip-right" style="--w: 90%">
            <div class="head"><div class="icon" style="background: var(--secondary)"><i class="fas fa-server"></i></div><h3>Backend</h3></div>
            <div class="skill-item"><span>Node.js</span><div class="bar"><i style="--w:90%"></i></div></div>
            <div class="skill-item"><span>Python</span><div class="bar"><i style="--w:85%"></i></div></div>
            <div class="skill-item"><span>Express.js</span><div class="bar"><i style="--w:80%"></i></div></div>
          </article>
          <article class="skill" data-aos="flip-left" style="--w: 85%">
            <div class="head"><div class="icon" style="background: var(--accent)"><i class="fas fa-database"></i></div><h3>Database</h3></div>
            <div class="skill-item"><span>MongoDB</span><div class="bar"><i style="--w:85%"></i></div></div>
            <div class="skill-item"><span>PostgreSQL</span><div class="bar"><i style="--w:80%"></i></div></div>
            <div class="skill-item"><span>MySQL</span><div class="bar"><i style="--w:75%"></i></div></div>
          </article>
          <article class="skill" data-aos="flip-right" style="--w: 80%">
            <div class="head"><div class="icon" style="background: var(--success)"><i class="fas fa-tools"></i></div><h3>Tools</h3></div>
            <div class="skill-item"><span>Docker</span><div class="bar"><i style="--w:80%"></i></div></div>
            <div class="skill-item"><span>Git</span><div class="bar"><i style="--w:90%"></i></div></div>
            <div class="skill-item"><span>AWS</span><div class="bar"><i style="--w:75%"></i></div></div>
          </article>
        </div>
      </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="badge">Experience</span>
          <h2 class="section-title gradient-text">My Journey</h2>
          <p class="section-desc">A timeline of my professional experience and education.</p>
        </div>
        <div class="timeline" id="timeline">
          <div class="t-item" data-aos="fade-right">
            <div class="dot" aria-hidden="true"></div>
            <div class="bubble">
              <div class="t-date">2020 - Present</div>
              <div class="t-title">Senior Full Stack Developer</div>
              <div class="t-company">TechCorp</div>
              <p class="muted">Led a team of developers to build scalable web applications using React, Node.js, and AWS.</p>
            </div>
          </div>
          <div class="t-item" data-aos="fade-left">
            <div class="dot" aria-hidden="true"></div>
            <div class="bubble">
              <div class="t-date">2018 - 2020</div>
              <div class="t-title">Full Stack Developer</div>
              <div class="t-company">StartupX</div>
              <p class="muted">Developed end-to-end solutions for e-commerce platforms using Vue.js and Python.</p>
            </div>
          </div>
          <div class="t-item" data-aos="fade-right">
            <div class="dot" aria-hidden="true"></div>
            <div class="bubble">
              <div class="t-date">2016 - 2018</div>
              <div class="t-title">Bachelor of Computer Science</div>
              <div class="t-company">University of Technology</div>
              <p class="muted">Graduated with honors, specializing in web development and software engineering.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="badge">Projects</span>
          <h2 class="section-title gradient-text">My Work</h2>
          <p class="section-desc">A showcase of my recent projects, demonstrating my skills and creativity.</p>
        </div>
        <div class="projects">
          <article class="card" data-aos="zoom-in-up">
            <div class="cover"></div>
            <div class="overlay">
              <a class="btn btn-primary" href="#"><i class="fas fa-eye"></i> View</a>
              <a class="btn btn-secondary" href="#"><i class="fas fa-code"></i> Source</a>
            </div>
            <div class="body">
              <span class="tag">Web Application</span>
              <h3>E-Commerce Platform</h3>
              <p class="muted">A fully responsive e-commerce platform built with React and Node.js.</p>
              <div class="chips">
                <span class="chip">React</span><span class="chip">Node.js</span><span class="chip">MongoDB</span>
              </div>
            </div>
          </article>
          <article class="card" data-aos="zoom-in-up" data-aos-delay="100">
            <div class="cover"></div>
            <div class="overlay">
              <a class="btn btn-primary" href="#"><i class="fas fa-eye"></i> View</a>
              <a class="btn btn-secondary" href="#"><i class="fas fa-code"></i> Source</a>
            </div>
            <div class="body">
              <span class="tag">SaaS</span>
              <h3>Task Management App</h3>
              <p class="muted">A SaaS application for team collaboration, built with Vue.js and Firebase.</p>
              <div class="chips">
                <span class="chip">Vue.js</span><span class="chip">Firebase</span><span class="chip">TypeScript</span>
              </div>
            </div>
          </article>
          <article class="card" data-aos="zoom-in-up" data-aos-delay="200">
            <div class="cover"></div>
            <div class="overlay">
              <a class="btn btn-primary" href="#"><i class="fas fa-eye"></i> View</a>
              <a class="btn btn-secondary" href="#"><i class="fas fa-code"></i> Source</a>
            </div>
            <div class="body">
              <span class="tag">API</span>
              <h3>RESTful API</h3>
              <p class="muted">A secure RESTful API for a mobile app, built with Express.js and PostgreSQL.</p>
              <div class="chips">
                <span class="chip">Express.js</span><span class="chip">PostgreSQL</span><span class="chip">Docker</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section contact">
      <div class="container">
        <div class="section-header" data-aos="fade-up">
          <span class="badge">Contact</span>
          <h2 class="section-title gradient-text">Get in Touch</h2>
          <p class="section-desc">Feel free to reach out for collaborations or inquiries.</p>
        </div>
        <div class="contact-grid">
          <div data-aos="fade-right">
            <div class="contact-item"><div class="contact-ico"><i class="fas fa-envelope"></i></div><span>mohsahrul@example.com</span></div>
            <div class="contact-item"><div class="contact-ico" style="background: var(--secondary)"><i class="fas fa-phone"></i></div><span>+62 123 456 7890</span></div>
            <div class="contact-item"><div class="contact-ico" style="background: var(--accent)"><i class="fas fa-map-marker-alt"></i></div><span>Jakarta, Indonesia</span></div>
          </div>
          <form class="form" id="contactForm" data-aos="fade-left" novalidate>
            <h3>Send a Message</h3>
            <div class="fg">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" required />
            </div>
            <div class="fg">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" required />
            </div>
            <div class="fg">
              <label for="message">Message</label>
              <textarea id="message" name="message" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
          </form>
        </div>
      </div>
    </section>
@endsection
