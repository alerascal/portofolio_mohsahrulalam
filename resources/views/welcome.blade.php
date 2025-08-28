@extends('layouts.frontend') @section('title', 'Home - Moh Sahrul Alamsyah')
@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container content" data-aos="fade-up" data-aos-duration="800">
        <span class="badge">{{ $hero->badge }}</span>
        <h1 class="title gradient-text"><span id="typed-title"></span></h1>
        <h2 class="subtitle">{{ $hero->subtitle }}</h2>
        <p class="desc"><span id="typed-desc"></span></p>
        <div class="actions">
            <a class="btn btn-primary" href="#contact"
                ><i class="fas fa-envelope"></i> Hire Me</a
            >
            <a class="btn btn-secondary" href="#projects"
                ><i class="fas fa-briefcase"></i> View Projects</a
            >
        </div>
        <div class="stats">
            @foreach($hero->stats as $stat)
            <div
                class="stat"
                data-aos="fade-up"
                data-aos-delay="{{ $loop->index * 100 }}"
            >
                <strong>{{ $stat["value"] }}</strong>
                <span>{{ $stat["label"] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="badge">About Me</span>
            <h2 class="section-title gradient-text">
                {{ $abouts->title ?? 'Who I Am' }}
            </h2>
        </div>

        <div
            class="about"
            style="
                display: flex;
                flex-wrap: wrap;
                gap: 30px;
                align-items: flex-start;
            "
        >
            <!-- Kiri: Konten kotak -->
            <div
                data-aos="fade-right"
                data-aos-duration="800"
                style="
                    flex: 1 1 400px;
                    padding: 25px;
                    border-radius: 15px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                "
            >
                <h3
                    style="
                        margin-bottom: 15px;
                        font-size: 22px;
                        font-weight: 700;
                    "
                >
                    {{ $abouts->title ?? 'Who I Am' }}
                </h3>

                <p
                    class="muted"
                    style="
                        font-size: 16px;
                        line-height: 1.7;
                        color: var(--primary);
                    "
                >
                    {!! nl2br(e($abouts->description ?? 'Saya Moh Sahrul Alam
                    Syah, Full Stack Developer...')) !!}
                </p>

                <!-- Fitur -->
                <div style="display: grid; gap: 10px; margin-top: 18px">
                    <div
                        class="feature"
                        data-aos="zoom-in"
                        data-aos-delay="100"
                    >
                        <div class="ico"><i class="fas fa-code"></i></div>
                        <span
                            ><strong>Kode Bersih & Efisien</strong> – Menulis
                            kode yang terstruktur, mudah dirawat, dan
                            scalable.</span
                        >
                    </div>
                    <div
                        class="feature"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <div class="ico" style="background: var(--secondary)">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <span
                            ><strong>Solusi Cepat & Skalabel</strong> –
                            Membangun sistem yang optimal dan siap
                            berkembang.</span
                        >
                    </div>
                    <div
                        class="feature"
                        data-aos="zoom-in"
                        data-aos-delay="300"
                    >
                        <div class="ico" style="background: var(--accent)">
                            <i class="fas fa-users"></i>
                        </div>
                        <span
                            ><strong>Desain Berfokus Pengguna</strong> –
                            Mengutamakan pengalaman pengguna yang sederhana dan
                            nyaman.</span
                        >
                    </div>
                </div>
            </div>

            <!-- Kanan: Gambar -->
            <div
                class="about-visual"
                data-aos="fade-left"
                data-aos-duration="800"
                style="flex: 1 1 300px; min-height: 500px"
            >
                <img
                    src="{{ $abouts->image ? asset('storage/' . $abouts->image) : 'https://images.unsplash.com/photo-1522444195799-478538b28823?q=80&w=1400&auto=format&fit=crop' }}"
                    alt="{{ $abouts->title ?? 'About Image' }}"
                    style="
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        border-radius: 20px;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
                    "
                />
            </div>
        </div>
    </div>
</section>
<!-- Skills Section -->
<section id="skills" class="section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="badge">Keahlian</span>
            <h2 class="section-title gradient-text">Bahasa & Framework</h2>
            <p class="section-desc">
                Bahasa pemrograman, framework, database, dan tools yang saya
                gunakan dalam membangun aplikasi web modern.
            </p>
        </div>

        <!-- Skills Grid -->
        <div class="skills-grid" id="skillsGrid">
            @foreach($skills as $category => $skillGroup)
                @php
                    // Default icon & warna kategori
                    $iconColor = 'var(--primary)';
                    $iconClass = 'fas fa-code';

                    // Tentukan icon & warna berdasarkan kategori
                    switch($category) {
                        case 'Bahasa Pemrograman':
                            $iconColor = 'var(--primary)';
                            $iconClass = 'fas fa-terminal';
                            break;
                        case 'Framework':
                            $iconColor = 'var(--secondary)';
                            $iconClass = 'fas fa-layer-group';
                            break;
                        case 'Database':
                            $iconColor = 'var(--accent)';
                            $iconClass = 'fas fa-database';
                            break;
                        case 'Tools':
                            $iconColor = 'var(--success)';
                            $iconClass = 'fas fa-tools';
                            break;
                    }
                @endphp

                <article class="skill" data-aos="flip-left" style="--w: 90%">
                    <!-- Header kategori -->
                    <div class="head">
                        <div class="icon">
                            <i class="{{ $iconClass }}" style="background: {{ $iconColor }}"></i>
                        </div>
                        <h3>{{ $category }}</h3>
                    </div>

                    <!-- Skill items -->
                    @foreach($skillGroup as $skill)
                        @php
                            // Warna skill mengikuti kategori
                            $skillColor = match($category) {
                                'Framework' => 'var(--secondary)',
                                'Database' => 'var(--accent)',
                                'Tools' => 'var(--success)',
                                'Bahasa Pemrograman' => 'var(--warning)',
                                default => 'var(--primary)',
                            };
                        @endphp

                        <div class="skill-item">
                            @if($skill->icon)
                                <span>
                                    <i class="{{ $skill->icon }}" style="color: {{ $skillColor }}"></i>
                                    {{ $skill->name }}
                                </span>
                            @else
                                <span>{{ $skill->name }}</span>
                            @endif

                            <!-- Progress bar -->
                            <div class="bar">
                                <i style="--w: {{ $skill->level }}%; background-color: {{ $skillColor }}"></i>
                            </div>
                            <span class="percent">{{ $skill->level }}%</span>
                        </div>
                    @endforeach
                </article>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience -->
<section id="experience" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="badge">Pengalaman</span>
            <h2 class="section-title gradient-text">Perjalanan Saya</h2>
            <p class="section-desc">
                Timeline pendidikan dan proyek yang saya kerjakan dengan
                berbagai bahasa pemrograman & framework.
            </p>
        </div>

        <div class="timeline" id="timeline">
            @foreach($experiences as $index => $exp)
            <div
                class="t-item"
                data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}"
            >
                <div class="dot" aria-hidden="true"></div>
                <div class="bubble">
                    <div class="t-date">{{ $exp->date }}</div>
                    <div class="t-title">{{ $exp->title }}</div>
                    <div class="t-company">{{ $exp->company }}</div>
                    <p class="muted">{!! nl2br(e($exp->description)) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="section">
    <!-- Modal Lightbox -->
    <div id="lightboxModal" class="lightbox-modal" style="display: none">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightboxImage" />
        <div id="caption"></div>
    </div>
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="badge">Projects</span>
            <h2 class="section-title gradient-text">Portofolio</h2>
            <p class="section-desc">
                Beberapa proyek yang pernah saya kerjakan menggunakan PHP,
                Laravel, CodeIgniter, Python, dan MySQL.
            </p>
        </div>

        <div class="projects">
            @forelse($projects as $project)
            <article
                class="card"
                data-aos="zoom-in-up"
                data-aos-delay="{{ $loop->index * 100 }}"
            >
                <div class="cover">
                    @if($project->cover_image)
                    <img
                        src="{{ asset('storage/'.$project->cover_image) }}"
                        alt="{{ $project->name }}"
                    />
                    @else
                    <img
                        src="assets/img/default.jpg"
                        alt="{{ $project->name }}"
                    />
                    @endif
                </div>

                <div class="overlay">
                    @if($project->demo_link)
                    <a
                        class="btn btn-primary"
                        href="{{ $project->demo_link }}"
                        target="_blank"
                    >
                        <i class="fas fa-eye"></i> Demo
                    </a>
                    @endif @if($project->source_link)
                    <a
                        class="btn btn-secondary"
                        href="{{ $project->source_link }}"
                        target="_blank"
                    >
                        <i class="fas fa-code"></i> Source
                    </a>
                    @endif

                  <a class="btn" style="background-color: #0d6efd; color: white;" href="{{ route('projects.show', $project->id) }}">
    <i class="fas fa-info-circle"></i> Detail
</a>

                </div>

                <div class="body">
                    <span
                        class="tag"
                        >{{ $project->category ?? 'Web Application' }}</span
                    >
                    <h3>{{ $project->name }}</h3>
                    <p class="muted">
                        {{ Str::limit($project->description ?? 'Deskripsi proyek belum ditambahkan.', 100, '...') }}
                    </p>

                    @if($project->technologies)
                    <div class="chips">
                        @foreach(explode(',', $project->technologies) as $tech)
                        <span class="chip">{{ trim($tech) }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </article>
            @empty
            <p class="text-muted">Belum ada proyek yang ditambahkan.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section contact">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="badge">Contact</span>
            <h2 class="section-title gradient-text">Kontak saya</h2>
            <p class="section-desc">
                Silakan Konsultasi untuk Website Impian anda dan buat bisnis
                anda semakin maju
            </p>
        </div>

        <div class="contact-grid">
            <!-- Info -->
            <div data-aos="fade-right">
                @foreach($contacts as $contact)
                <div class="contact-item">
                    <div class="contact-ico" @if($contact->
                        color) style="background: {{ $contact->color }};"
                        @endif>
                        <i class="{{ $contact->icon }}"></i>
                    </div>
                    <span>{{ $contact->value }}</span>
                </div>
                @endforeach
            </div>
            <!-- Form -->
            <form
                class="form card"
                id="contactForm"
                data-aos="fade-left"
                onsubmit="sendToWhatsApp(event)"
            >
                <h3>Send a Message via WhatsApp</h3>

                <div class="fg">
                    <label for="name">Full Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        required
                        placeholder="Your full name"
                    />
                </div>

                <div class="fg">
                    <label for="email">Email Address</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        placeholder="your@email.com"
                    />
                </div>

                <div class="fg">
                    <label for="message">Your Message</label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        placeholder="Type your message..."
                    ></textarea>
                </div>

                <button class="btn btn-whatsapp" type="submit">
                    <i class="fab fa-whatsapp"></i> Send via WhatsApp
                </button>

                <!-- feedback -->
                <p id="formFeedback" class="feedback"></p>
            </form>
        </div>
    </div>
</section>

<style>
    .fg input:focus,
    .fg textarea:focus {
        border-color: #25d366;
        outline: none;
        box-shadow: 0 0 0 2px rgba(37, 211, 102, 0.2);
    }
    .btn-whatsapp {
        background: #25d366;
        color: white;
        border: none;
        padding: 0.9rem 1.5rem;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: 0.3s;
    }
    .btn-whatsapp:hover {
        background: #1ebe5d;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(37, 211, 102, 0.3);
    }
    .feedback {
        margin-top: 1rem;
        font-size: 0.9rem;
        font-weight: 500;
    }
    .feedback.error {
        color: #e74c3c;
    }
    .feedback.success {
        color: #2ecc71;
    }
</style>

<script>
    function sendToWhatsApp(event) {
        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const feedback = document.getElementById("formFeedback");

        if (!name || !email || !message) {
            feedback.textContent = "⚠️ Please fill all fields before sending.";
            feedback.className = "feedback error";
            return;
        }

        const phone = "{{ $phoneNumber }}"; // Ambil dari database
        const text = `Halo, saya ${name} (${email}).\n\n${message}`;
        const encodedText = encodeURIComponent(text);
        const url = `https://wa.me/${phone}?text=${encodedText}`;

        feedback.textContent = "✅ Opening WhatsApp...";
        feedback.className = "feedback success";

        window.open(url, "_blank");
    }
</script>
@endsection
