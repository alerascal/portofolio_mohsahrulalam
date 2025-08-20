<!-- resources/views/layouts/frontend.blade.php -->

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

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Link to Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}" />

    @stack('styles') <!-- Untuk stack custom CSS jika diperlukan -->
  </head>
  <body>
    <!-- Loading -->
    <div class="loading" aria-hidden="true">
      <div class="logo">Moh Sahrul Alamsyah</div>
    </div>

    <!-- Header Section -->
    @include('component.header')

    <!-- Main Content Section -->
    <main class="main-content">
      @yield('content')  <!-- Konten Dinamis -->
    </main>

    <!-- Footer Section -->
    @include('component.footer')

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Script Components -->
    @include('component.script')

    <script>
      // Initialize AOS animations
      AOS.init({
        duration: 1000,
        once: true, // Animasi hanya terjadi sekali saat scroll
      });
    </script>
  </body>
</html>
