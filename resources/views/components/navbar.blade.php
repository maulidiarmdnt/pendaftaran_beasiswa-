<nav class="fixed top-0 left-0 w-full p-3 shadow-md bg-white z-50">
    <div class="container mx-auto flex flex-col md:flex-row justify-between"> <!-- Container untuk memusatkan konten -->
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center">
                <!-- Logo Situs -->
                <img src="{{ asset('images/topi_beasiswa.png') }}" alt="" class="w-12 mr-1"> <!-- Logo Beasiswa -->
                <a class="text-xl font-bold uppercase" href="/">Beasiswa</a>
            </div>

            <!-- Tombol hamburger untuk tampilan mobile -->
            <div class="block md:hidden">
                <button id="menu-toggle" class="focus:outline-none p-2">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Navigasi -->
        <div id="menu" class="hidden flex-col md:flex md:flex-row md:space-x-3 mx-2 md:mx-0 md:items-center">
            <!-- Link ke Beranda -->
            <a href="{{ route('beranda') }}" class="block my-1 md:my-0 whitespace-nowrap">
                <button
                    class="{{ request()->routeIs('beranda') ? 'bg-teal-500 text-white' : 'text-tealbg-teal-500 hover:bg-teal-500 hover:text-white' }} rounded px-2 py-1 font-bold w-full text-left md:w-auto">
                    Beranda
                </button>
            </a>

            <!-- Link ke Daftar Beasiswa -->
            <a href="{{ route('daftar') }}" class="block my-1 md:my-0 whitespace-nowrap">
                <button
                    class="{{ request()->routeIs('daftar') ? 'bg-teal-500 text-white' : 'text-tealbg-teal-500 hover:bg-teal-500 hover:text-white' }} rounded px-2 py-1 font-bold w-full text-left md:w-auto">
                    Daftar Beasiswa
                </button>
            </a>

            <!-- Link ke Hasil Pendaftaran -->
            <a href="{{ route('hasil') }}" class="block my-1 md:my-0 whitespace-nowrap">
                <button
                    class="{{ request()->routeIs('hasil') ? 'bg-teal-500 text-white' : 'text-tealbg-teal-500 hover:bg-teal-500 hover:text-white' }} rounded px-2 py-1 font-bold w-full text-left md:w-auto">
                    Hasil Pendaftaran
                </button>
            </a>

            <!-- Link ke Grafik -->
            <a href="{{ route('grafik') }}" class="block my-1 md:my-0 whitespace-nowrap">
                <button
                    class="{{ request()->routeIs('grafik') ? 'bg-teal-500 text-white' : 'text-tealbg-teal-500 hover:bg-teal-500 hover:text-white' }} rounded px-2 py-1 font-bold w-full text-left md:w-auto">
                    Grafik
                </button>
            </a>
        </div>
    </div>
</nav>

<!-- Script untuk toggle menu pada tampilan mobile -->
<script>
    // Mendapatkan elemen tombol toggle dan menu navigasi
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    // Menambahkan event listener untuk membuka/menutup menu pada tampilan mobile
    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden'); // Menghilangkan/tampilkan menu (toggle class hidden)
        menu.classList.toggle('flex'); // Menampilkan menu dengan flexbox jika dibuka
    });
</script>
