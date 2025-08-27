<!DOCTYPE html>
<html lang="id" data-theme="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard - Moh Sahrul Alamsyah</title>
        <meta
            name="description"
            content="Dashboard untuk manajemen proyek dan statistik"
        />

        <!-- Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <script
            defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        ></script>
        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chart.js/3.9.1/chart.min.js"></script>

        <!-- Link to Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}" />
    </head>
    <body>
        <div class="dashboard">
           
            
            <!-- Main Dashboard -->
            <div class="dashboard-main" id="dashboardMain">
               @include('component.dashboard.sidebar')
              @include('component.dashboard.navbar')
                 <main class="main-content">
                    @yield('content') <!-- Konten utama halaman dinamis -->
                </main>
                @include('component.dashboard.script')
            </div>
        </div>
        @stack('scripts')
    </body>
    
    
</html>
