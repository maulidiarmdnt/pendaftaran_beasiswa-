<!-- Modal -->
<div id="modal"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 transition-opacity duration-300 ease-out">
    <!-- Modal Box -->
    <div id="modalBox"
        class="bg-white rounded-lg shadow-lg p-6 w-11/12 md:w-1/2 transform transition-transform duration-300 scale-95 opacity-0">
        <!-- Judul Modal -->
        <h2 id="modalTitle" class="text-2xl font-bold mb-4"></h2>
        <!-- Konten Modal -->
        <p id="modalContent" class="text-gray-600 mb-4"></p>
        <!-- Subjudul untuk Syarat -->
        <h3 class="font-semibold mb-2">Syarat:</h3>
        <!-- Daftar Syarat -->
        <ul id="modalRequirements" class="text-gray-600 mb-4 list-disc pl-5"></ul>
        <!-- Tombol Tutup Modal -->
        <button onclick="closeModal()"
            class="bg-teal-500 text-white font-bold py-2 px-4 rounded hover:bg-teal-600">Tutup</button>
    </div>
</div>

<script>
    // Objek modalContent berisi data yang diperlukan untuk konten modal
    const modalContent = {
        'akademik': {
            title: 'Beasiswa Akademik',
            content: 'Beasiswa ini ditujukan bagi mahasiswa yang memiliki prestasi akademik tinggi. Biasanya diberikan berdasarkan nilai IPK atau prestasi di bidang studi tertentu.',
            requirements: [
                'Memiliki nilai IPK minimal yang ditentukan.',
                'Melampirkan transkrip nilai resmi.',
                'Mengajukan surat rekomendasi dari dosen atau institusi pendidikan.'
            ]
        },
        'non_akademik': {
            title: 'Beasiswa Non-Akademik',
            content: 'Beasiswa ini diberikan kepada mahasiswa yang menunjukkan prestasi di bidang non-akademik, seperti olahraga, seni, atau kegiatan sosial.',
            requirements: [
                'Memiliki prestasi di bidang non-akademik yang relevan.',
                'Melampirkan bukti prestasi.',
                'Mengisi formulir pendaftaran dan menyertakan esai tentang pengalaman di bidang tersebut.'
            ]
        },
        'pelatihan': {
            title: 'Beasiswa Pelatihan',
            content: 'Beasiswa ini diberikan untuk mengikuti program pelatihan atau kursus yang dapat meningkatkan keterampilan dan kemampuan mahasiswa.',
            requirements: [
                'Menyertakan rencana pelatihan yang ingin diikuti.',
                'Melampirkan surat rekomendasi dari dosen atau mentor.',
                'Mengisi formulir pendaftaran dan menyertakan motivasi untuk mengikuti pelatihan tersebut.'
            ]
        }
    };

    // Fungsi openModal bertanggung jawab untuk membuka modal dan menampilkan data yang sesuai
    function openModal(type) {
        // Memperbarui judul modal sesuai dengan jenis beasiswa
        document.getElementById('modalTitle').innerText = modalContent[type].title;
        // Memperbarui konten modal dengan penjelasan mengenai jenis beasiswa
        document.getElementById('modalContent').innerText = modalContent[type].content;

        // Memperbarui daftar syarat beasiswa
        const requirementsList = document.getElementById('modalRequirements');
        requirementsList.innerHTML = ''; // Membersihkan daftar syarat yang ada sebelumnya
        modalContent[type].requirements.forEach(req => {
            const li = document.createElement('li');
            li.innerText = req;
            requirementsList.appendChild(li);
        });

        // Menampilkan modal
        const modal = document.getElementById('modal');
        const modalBox = document.getElementById('modalBox');

        // Menghapus kelas 'hidden' dan menambahkan animasi untuk menampilkan modal
        modal.classList.remove('hidden');

        // Menambahkan animasi fade-in dan scale-up pada modal
        setTimeout(() => {
            modalBox.classList.remove('opacity-0', 'scale-95');
            modalBox.classList.add('opacity-100', 'scale-100');
        }, 10); // Menambahkan sedikit jeda untuk memastikan transisi diterapkan dengan benar
    }

    // Fungsi closeModal bertanggung jawab untuk menutup modal
    function closeModal() {
        const modal = document.getElementById('modal');
        const modalBox = document.getElementById('modalBox');

        // Menambahkan animasi fade-out dan scale-down pada modal saat ditutup
        modalBox.classList.add('opacity-0', 'scale-95');
        modalBox.classList.remove('opacity-100', 'scale-100');

        // Menyembunyikan modal setelah animasi selesai
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Durasi transisi harus sesuai dengan waktu animasi yang diatur
    }
</script>
