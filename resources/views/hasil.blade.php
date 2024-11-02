@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-white mb-10 pb-10 shadow-md rounded-lg">
        <!-- Judul halaman -->
        <h1 class="text-3xl font-bold text-black mb-2 mt-24 pl-10 pt-10 text-center">Hasil Pendaftaran Beasiswa</h1>

        <!-- Alert untuk pesan sukses -->
        @if (session('success'))
            <!-- Menampilkan alert ketika pendaftaran berhasil -->
            <div class="max-w-full bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mx-10" role="alert">
                <p class="font-bold">Sukses!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Kondisi ketika tidak ada data pendaftaran -->
        @if ($beasiswa->isEmpty())
            <!-- Menampilkan pesan ketika data pendaftaran kosong -->
            <div class="max-w-full bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mx-10" role="alert">
                <p class="font-bold">Tidak Ada Pendaftaran</p>
                <p>Belum ada data pendaftaran beasiswa yang tersimpan.</p>
            </div>
        @else
            <!-- Tabel untuk menampilkan data pendaftar beasiswa -->
            <div class="overflow-x-auto">
                <div class="p-10">
                    <table class="min-w-full bg-white mx-auto">
                        <thead>
                            <!-- Header tabel -->
                            <tr class="border-b-2">
                                <th class="py-2 px-4 text-left">Nama</th>
                                <th class="py-2 px-4 text-left">NIM</th>
                                <th class="py-2 px-4 text-left">Email</th>
                                <th class="py-2 px-4 text-left">No. HP</th>
                                <th class="py-2 px-4 text-left">Semester</th>
                                <th class="py-2 px-4 text-left">IPK</th>
                                <th class="py-2 px-4 text-left">Jenis Beasiswa</th>
                                <th class="py-2 px-4 text-left">Berkas yang Diupload</th>
                                <th class="py-2 px-4 text-left">Status Ajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Looping data pendaftaran beasiswa dari database -->
                            @foreach ($beasiswa as $bea)
                                <!-- Baris untuk setiap data pendaftar -->
                                <tr class="border-b hover:bg-gray-50">
                                    <!-- Kolom Nama -->
                                    <td class="py-2 px-4">{{ $bea->nama }}</td>
                                    <!-- Kolom NIM -->
                                    <td class="py-2 px-4">{{ $bea->nim }}</td>
                                    <!-- Kolom Email -->
                                    <td class="py-2 px-4">{{ $bea->email }}</td>
                                    <!-- Kolom No. HP -->
                                    <td class="py-2 px-4">{{ $bea->no_hp }}</td>
                                    <!-- Kolom Semester -->
                                    <td class="py-2 px-4">{{ $bea->semester }}</td>
                                    <!-- Kolom IPK -->
                                    <td class="py-2 px-4">{{ $bea->ipk }}</td>
                                    <!-- Kolom Jenis Beasiswa -->
                                    <td class="py-2 px-4">{{ ucfirst($bea->jenis_beasiswa) }}</td>
                                    <!-- Kolom Berkas yang diupload -->
                                    <td class="py-2 px-4">
                                        @if (file_exists(storage_path('app/public/' . $bea->berkas)))
                                            <!-- Link untuk melihat berkas -->
                                            <a href="{{ asset('storage/' . $bea->berkas) }}"
                                                class="text-blue-500 hover:underline" target="_blank">Lihat Berkas</a>
                                        @else
                                            <!-- Pesan jika berkas tidak ditemukan -->
                                            <span class="text-red-500">Berkas tidak ditemukan</span>
                                        @endif
                                    </td>
                                    <!-- Kolom Status Ajuan -->
                                    <td class="py-2 px-4">
                                        <span class="text-yellow-600">{{ $bea->status }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
