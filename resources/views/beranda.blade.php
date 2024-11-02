@extends('layouts.app')

@section('content')
    <div class="relative h-screen overflow-hidden">
        <!-- Gambar latar belakang full-width dengan efek blur -->
        <img src="{{ asset('images/bg_beasiswa.jpg') }}" alt=""
            class="absolute inset-0 w-full h-full object-cover filter blur-sm opacity-40">

        <!-- Kontainer untuk teks dan tombol -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center container mx-auto">
            <!-- Judul utama halaman -->
            <h1 class="text-5xl font-bold text-gray-800 mb-8">Selamat Datang di Sistem Pendaftaran Beasiswa</h1>

            <!-- Paragraf deskripsi -->
            <p class="text-lg font-bold text-gray-600 mb-8">Kami menyediakan berbagai program beasiswa mulai dari beasiswa
                akademik, beasiswa non-akademik, hingga beasiswa pelatihan. Apapun minat dan potensimu, temukan peluang
                beasiswa yang tepat untuk mendukung perkembangan pendidikan, keterampilan, dan bakatmu di sini.</p>

            <!-- Tombol untuk menuju halaman daftar beasiswa -->
            <a href="{{ route('daftar') }}"
                class="bg-teal-500 text-white font-bold py-2 px-4 rounded hover:bg-teal-600">Daftar Sekarang</a>
        </div>
    </div>

    <div class="container mx-auto my-20">
        @include('components.card') <!-- Menyertakan komponen kartu -->
        @include('components.modal') <!-- Menyertakan komponen modal -->
    </div>
@endsection
