@extends('layouts.frontend')

@section('title', $project->name . ' - Project Detail')

@section('content')
<!-- Hero Section -->
<section class="project-hero position-relative overflow-hidden" data-aos="fade-in">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <span class="badge-gradient mb-3" data-aos="fade-up" data-aos-delay="100">
                        {{ $project->category ?? 'Project' }}
                    </span>
                    <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="200">
                        {{ $project->name }}
                    </h1>
                    <p class="hero-subtitle mb-4" data-aos="fade-up" data-aos-delay="300">
                        {{ \Illuminate\Support\Str::limit($project->description ?? 'Eksplorasi detail lengkap dan pencapaian terbaru dari proyek ini.', 80) }}
                    </p>
                    
                    <!-- Progress Ring -->
                    <div class="progress-ring-container" data-aos="zoom-in" data-aos-delay="400">
                        <svg class="progress-ring" width="140" height="140">
                            <circle class="progress-ring-circle-bg" cx="70" cy="70" r="60"></circle>
                            <circle class="progress-ring-circle" cx="70" cy="70" r="60" 
                                style="stroke-dasharray: {{ 2 * 3.14159 * 60 }}; 
                                       stroke-dashoffset: {{ 2 * 3.14159 * 60 * (1 - ($project->progress ?? 0) / 100) }};">
                            </circle>
                        </svg>
                        <div class="progress-text">
                            <span class="progress-number">{{ $project->progress ?? 0 }}%</span>
                            <small class="progress-label">Complete</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="project-details-section">
    <div class="container">
        <div class="row g-4 mb-5">
            <!-- Project Info -->
            <div class="col-lg-8" data-aos="fade-right">
                <div class="project-info-card">
                    <div class="card-header-modern bg-gradient-primary text-white">
                        <h3 class="card-title">Informasi Proyek</h3>
                    </div>
                    <div class="card-body-modern">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Client:</span>
                                    <span class="info-value">{{ $project->client ?? 'Tidak tersedia' }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Status:</span>
                                    <span class="status-pill status-{{ strtolower($project->status ?? 'unknown') }}">
                                        {{ $project->status_label ?? 'Unknown' }}
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Priority:</span>
                                    <span class="priority-pill priority-{{ strtolower($project->priority ?? 'unknown') }}">
                                        {{ $project->priority_label ?? 'Unknown' }}
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Deadline:</span>
                                    <span class="info-value">
                                        {{ $project->deadline ? $project->deadline->format('d M Y') : 'Belum ditentukan' }}
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Demo Link:</span>
                                    <span class="info-value">
                                        @if($project->demo_link)
                                            <a href="{{ $project->demo_link }}" target="_blank" class="text-primary text-decoration-none">
                                                Lihat Demo
                                            </a>
                                        @else
                                            Tidak tersedia
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-label">Source Link:</span>
                                    <span class="info-value">
                                        @if($project->source_link)
                                            <a href="{{ $project->source_link }}" target="_blank" class="text-primary text-decoration-none">
                                                Lihat Source
                                            </a>
                                        @else
                                            Tidak tersedia
                                        @endif
                                    </span>
                                </div>
                            </div>
                            
                            @if(!empty($project->technologies_array) && count($project->technologies_array) > 0)
                            <div class="col-12">
                                <div class="info-box">
                                    <span class="info-label">Technologies:</span>
                                    <div class="chips mt-2">
                                        @foreach($project->technologies_array as $tech)
                                            <span class="chip">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="progress-section mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="progress-title">Project Progress</span>
                                <span class="progress-percentage">{{ $project->progress ?? 0 }}%</span>
                            </div>
                            <div class="modern-progress">
                                <div class="progress-track">
                                    <div class="progress-fill bg-gradient-primary" 
                                         style="width: {{ $project->progress ?? 0 }}%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="col-lg-4" data-aos="fade-left">
                <div class="description-card">
                    <div class="card-header-modern bg-gradient-secondary text-white">
                        <h3 class="card-title">Deskripsi Proyek</h3>
                    </div>
                    <div class="card-body-modern">
                        @php
                            $desc = $project->description ?? 'Belum ada deskripsi untuk proyek ini.';
                            $cleanDesc = strip_tags($desc);
                            $shortDesc = \Illuminate\Support\Str::limit($cleanDesc, 100);
                            $isLongText = strlen($cleanDesc) > 100;
                        @endphp

                        <div class="description-content">
                            <p class="description-text mb-3" id="shortDesc">
                                {{ $shortDesc }}
                            </p>

                            @if($isLongText)
                                <p class="description-text mb-3 d-none" id="fullDesc">
                                    {{ $cleanDesc }}
                                </p>
                                <button type="button" class="btn btn-sm btn-outline-primary" id="readMoreBtn">
                                    Lihat Selengkapnya
                                </button>
                            @endif
                        </div>

                        <div class="project-stats mt-4">
                            <div class="stat-item">
                                <strong>Created:</strong> {{ $project->created_at->format('M Y') }}
                            </div>
                            <div class="stat-item">
                                <strong>Gallery:</strong> {{ !empty($project->images) && $project->images->count() ? $project->images->count() : 0 }} Images
                            </div>
                            <div class="stat-item">
                                <strong>Last Updated:</strong> {{ $project->updated_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-section">
            <div class="section-header text-center mb-4" data-aos="fade-up">
                <span class="section-badge">Galeri</span>
                <h2 class="section-title">Galeri Proyek</h2>
                <p class="section-subtitle">Klik gambar untuk melihat dalam mode full screen</p>
            </div>
            
            @if(!empty($project->images) && $project->images->count())
                <div class="gallery-grid">
                    @foreach($project->images as $index => $img)
                        <div class="gallery-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="image-container" onclick="openLightbox('{{ asset('storage/'.$img->image) }}', '{{ $project->name }}')">
                                <img src="{{ asset('storage/'.$img->image) }}"
                                     class="gallery-image"
                                     alt="{{ $project->name }}"
                                     loading="lazy">
                                <div class="image-overlay">
                                    <div class="overlay-content">
                                        <button class="zoom-btn" type="button">+</button>
                                    </div>
                                </div>
                                <span class="image-number">{{ $index + 1 }} / {{ $project->images->count() }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-gallery" data-aos="fade-up">
                    <div class="empty-content">
                        <h4 class="empty-title">Belum Ada Gambar</h4>
                        <p class="empty-description">Galeri proyek ini masih kosong. Gambar akan ditambahkan segera.</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Back Button -->
        <div class="action-section">
            <a href="{{ url()->previous() }}" class="btn-back">
                ← <span>Kembali</span>
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightboxModal">
    <div class="lightbox-background" onclick="closeLightbox()"></div>
    <div class="lightbox-container">
        <button class="lightbox-close" onclick="closeLightbox()" type="button">×</button>
        <img class="lightbox-content" id="lightboxImage" alt="Full Screen Image">
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });

    function openLightbox(imageSrc, caption) {
        const modal = document.getElementById('lightboxModal');
        const modalImg = document.getElementById('lightboxImage');
        const captionText = document.getElementById('lightboxCaption');
        
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.classList.add('active');
        }, 10);
        
        modalImg.src = imageSrc;
        captionText.innerHTML = caption;
        
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const modal = document.getElementById('lightboxModal');
        modal.classList.remove('active');
        
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Close lightbox with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        }
    });

    // Read More / Less toggle - Fixed Implementation
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("readMoreBtn");
        
        if (btn) {
            btn.addEventListener("click", function () {
                const shortDesc = document.getElementById("shortDesc");
                const fullDesc = document.getElementById("fullDesc");

                // Check if elements exist
                if (!shortDesc || !fullDesc) {
                    console.error("Description elements not found");
                    return;
                }

                // Toggle display
                if (fullDesc.classList.contains("d-none")) {
                    // Show full description
                    shortDesc.classList.add("d-none");
                    fullDesc.classList.remove("d-none");
                    btn.textContent = "Lihat Lebih Sedikit";
                } else {
                    // Show short description
                    shortDesc.classList.remove("d-none");
                    fullDesc.classList.add("d-none");
                    btn.textContent = "Lihat Selengkapnya";
                }
            });
        }
    });
</script>
@endpush