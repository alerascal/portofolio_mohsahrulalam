<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Moh Sahrul Alamsyah - Full Stack Developer')</title>
  <meta name="description" content="Professional Full Stack Developer specializing in modern web technologies" />

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>

  <!-- AOS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}" />

  @stack('styles')
</head>
<body>
  <!-- Loading -->
<div class="loading" aria-hidden="true">
  <div class="spinner"></div>
  <div class="logo">Moh Sahrul Alamsyah</div>
  <div class="loading-dots">
    <span></span><span></span><span></span>
  </div>
</div>


  <!-- Header Section -->
  @include('component.header')

  <!-- Main Content Section -->
  <main class="main-content">
    @yield('content')
  </main>

  <!-- Footer Section -->
  @include('component.footer')

  <!-- AOS Script -->
  <script>
    AOS.init({
      duration: 800,
      once: true,
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="path/to/lightbox.js"></script>

  <!-- Script Components -->
  @include('component.script')
  @stack('scripts')
</body>
</html>