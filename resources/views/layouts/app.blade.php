<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul Halaman -->
    <title>@yield('title', 'Sistem Pendaftaran Beasiswa')</title>

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Chart.js untuk Grafik -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Vite untuk mengelola resource CSS dan JS -->
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<!-- Styling global untuk body -->
<style>
    body {
        font-family: 'poppins', sans-serif;
    }
</style>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Menyertakan komponen Navbar -->
    @include('components.navbar')

    <!-- Konten menggunakan flex-grow untuk mengambil sisa ruang halaman -->
    <div class="flex-grow overflow-y-auto">
        @yield('content') <!-- Tempat untuk memasukkan konten dinamis -->
    </div>

    <!-- Footer tetap di bagian bawah halaman -->
    @include('components.footer')
</body>

</html>
