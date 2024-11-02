@extends('layouts.app')

@section('content')
    <div class="mt-24 mb-10 flex justify-center items-center min-h-screen">
        <!-- Form Pendaftaran -->
        <div class="bg-white shadow-md rounded-lg w-full max-w-3xl">
            <div class="text-3xl font-bold text-black rounded-t-lg px-9 pt-8">
                <h4 class="text-center">Form Pendaftaran</h4> <!-- Judul Form Pendaftaran -->
            </div>
            <div class="p-4">
                <!-- Form pendaftaran dengan metode POST -->
                <form action="/daftar" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Input Nama -->
                    <div class="pt-4 px-5 flex flex-col gap-3">
                        <label for="nama" class="block text-black">Nama</label>
                        <input type="text"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('nama') border-red-500 @enderror"
                            id="nama" name="nama" placeholder="Nama" required value="{{ old('nama') }}">
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input NIM -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="nim" class="block text-black">NIM</label>
                        <input type="number"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('nim') border-red-500 @enderror"
                            id="nim" name="nim" placeholder="NIM" required value="{{ old('nim') }}">
                        @error('nim')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="email" class="block text-black">Email</label>
                        <input type="email"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('email') border-red-500 @enderror"
                            id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Nomor HP -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="no_hp" class="block text-black">Nomor HP</label>
                        <input type="number"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('no_hp') border-red-500 @enderror"
                            id="no_hp" name="no_hp" placeholder="Nomor HP" required value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pilihan Semester -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="semester" class="block text-black">Semester</label>
                        <select
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('semester') border-red-500 @enderror"
                            id="semester" name="semester" required>
                            <option value="">Pilih Semester</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('semester')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input IPK -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="ipk" class="block text-black">IPK</label>
                        <input type="text"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200"
                            id="ipk" name="ipk" readonly>
                    </div>

                    <!-- Pilihan Beasiswa -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="beasiswa" class="block text-black">Beasiswa</label>
                        <select
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('beasiswa') border-red-500 @enderror"
                            id="beasiswa" name="beasiswa" required>
                            <option value="">Pilih Beasiswa</option>
                            <option value="Akademik">Beasiswa Akademik</option>
                            <option value="Non-Akademik">Beasiswa Non-Akademik</option>
                            <option value="Pelatihan">Beasiswa Pelatihan</option>
                        </select>
                        @error('beasiswa')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Upload Berkas -->
                    <div class="pt-8 px-5 flex flex-col gap-3">
                        <label for="berkas" class="block text-black">Berkas</label>
                        <input type="file"
                            class="w-full block border rounded-lg bg-slate-200 text-black p-2 focus:outline-none focus:border-slate-200 focus:ring-1 focus:ring-slate-200 @error('berkas') border-red-500 @enderror"
                            id="berkas" name="berkas" required>
                        <span class=" text-xs">* File harus berupa pdf / jpg / zip</span>
                        @error('berkas')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Tombol Daftar dan Batal -->
                    <div class="px-5 pt-8 pb-4 flex justify-end gap-2">
                        <button type="submit"
                            class="bg-teal-500 text-white rounded-md p-2 hover:bg-teal-600 w-20">Daftar</button>
                        <a href="{{ route('beranda') }}"
                            class="bg-gray-500 text-white rounded-md p-2 hover:bg-gray-600 w-20 text-center">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script JavaScript untuk mengatur validasi dan input otomatis IPK berdasarkan pilihan semester -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ipkField = document.getElementById('ipk');
            const semesterSelect = document.getElementById('semester');
            const beasiswaSelect = document.getElementById('beasiswa');
            const berkasInput = document.getElementById('berkas');
            const submitButton = document.querySelector('button[type="submit"]');

            // Simulasi nilai IPK berdasarkan semester
            const ipkValues = {
                1: 2.8,
                2: 3.0,
                3: 2.9,
                4: 3.1,
                5: 3.2,
                6: 3.3,
                7: 3.4,
                8: 3.5
            };

            // Event listener untuk mengubah IPK saat semester dipilih
            semesterSelect.addEventListener('change', function() {
                const selectedSemester = parseInt(semesterSelect.value);
                const ipk = ipkValues[selectedSemester] || 0;
                ipkField.value = ipk;

                // Validasi apakah IPK memenuhi syarat minimal (>= 3.0)
                if (ipk < 3) {
                    beasiswaSelect.disabled = true;
                    berkasInput.disabled = true;
                    submitButton.disabled = true;
                } else {
                    beasiswaSelect.disabled = false;
                    berkasInput.disabled = false;
                    submitButton.disabled = false;
                    beasiswaSelect.focus();
                }
            });

            // Memicu perubahan default saat halaman pertama kali dimuat
            semesterSelect.dispatchEvent(new Event('change'));
        });
    </script>
@endsection
