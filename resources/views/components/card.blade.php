<div class="max-w-screen-lg mx-auto">
    <div>
        <h2 class="text-3xl font-bold text-black text-center pb-9">Pilihan Beasiswa</h2>
    </div>
    <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-6">
        <!-- Kategori Beasiswa Akademik -->
        <div
            class="bg-white shadow-md rounded-md p-4 flex flex-col items-center w-full lg:w-auto transform transition-transform duration-300 hover:scale-105">
            <!-- Animasi ditambahkan di sini -->
            <img src="{{ asset('images/akademik.jpg') }}" alt="" class="w-full h-72 object-cover mb-4">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Beasiswa Akademik</h2>
            <a onclick="openModal('akademik')" class="text-blue-500 hover:underline cursor-pointer">Lihat selengkapnya</a>
        </div>

        <!-- Kategori Beasiswa Non Akademik -->
        <div
            class="bg-white shadow-md rounded-md p-4 flex flex-col items-center w-full lg:w-auto transform transition-transform duration-300 hover:scale-105">
            <!-- Animasi ditambahkan di sini -->
            <img src="{{ asset('images/non_akademik.jpg') }}" alt="" class="w-full h-72 object-cover mb-4">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Beasiswa Non Akademik</h2>
            <a onclick="openModal('non_akademik')" class="text-blue-500 hover:underline cursor-pointer">Lihat
                Selengkapnya</a>
        </div>

        <!-- Kategori Beasiswa Pelatihan -->
        <div
            class="bg-white shadow-md rounded-md p-4 flex flex-col items-center w-full lg:w-auto transform transition-transform duration-300 hover:scale-105">
            <!-- Animasi ditambahkan di sini -->
            <img src="{{ asset('images/pelatihan.jpg') }}" alt="" class="w-full h-72 object-cover mb-4">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Beasiswa Pelatihan</h2>
            <a onclick="openModal('pelatihan')" class="text-blue-500 hover:underline cursor-pointer">Lihat
                Selengkapnya</a>
        </div>
    </div>
</div>
