@include('template.header')

<section class="container py-5" style="margin-top: 50px;">
    <h1 class="text-center fw-bold text-primary mb-5">Syarat dan Ketentuan - BangunRupa</h1>

    @php
        $terms = [
            [
                'icon' => 'fa-user-check',
                'title' => 'Pengguna Layanan',
                'desc' =>
                    'BangunRupa adalah platform digital yang menyediakan layanan desain rumah, termasuk penjualan desain siap pakai, layanan kustomisasi, serta penghubung dengan mitra jasa pembangunan. Dengan menggunakan layanan, Anda menyetujui semua syarat yang berlaku dan dilarang menggunakan situs untuk aktivitas ilegal. Pelanggaran dapat menyebabkan penghentian layanan.',
            ],
            [
                'icon' => 'fa-lock',
                'title' => 'Akun dan Keamanan',
                'desc' =>
                    'Untuk mengakses fitur tertentu, Anda perlu membuat akun dan bertanggung jawab atas kerahasiaan akun. Kami tidak bertanggung jawab atas kerugian akibat kelalaian Anda. Pengguna di bawah 18 tahun harus menggunakan layanan di bawah pengawasan.',
            ],
            [
                'icon' => 'fa-copyright',
                'title' => 'Hak Cipta dan Kekayaan Intelektual',
                'desc' =>
                    'Semua konten di BangunRupa dilindungi hukum hak cipta. Dilarang menggandakan, menyebarluaskan, atau memodifikasi konten tanpa izin tertulis. Pelanggaran dapat menyebabkan tindakan hukum dan pemblokiran layanan.',
            ],
            [
                'icon' => 'fa-file-signature',
                'title' => 'Lisensi Penggunaan',
                'desc' =>
                    'Pembelian desain memberi lisensi terbatas, non-eksklusif, dan tidak dapat dipindahtangankan untuk penggunaan pribadi. Tidak boleh dijual ulang atau digunakan ulang tanpa izin tertulis.',
            ],
            [
                'icon' => 'fa-comments',
                'title' => 'Ulasan dan Komentar',
                'desc' =>
                    'Ulasan harus sopan dan sesuai hukum. Konten negatif seperti SARA, fitnah, atau penipuan akan dihapus. Kami memiliki hak untuk menggunakan kembali konten yang Anda unggah.',
            ],
            [
                'icon' => 'fa-people-arrows',
                'title' => 'Tanggung Jawab Layanan',
                'desc' =>
                    'Kami hanya perantara antara pembeli dan penyedia jasa. Kami tidak bertanggung jawab atas hasil akhir pekerjaan mitra. Disarankan membuat kesepakatan tertulis sebelum memulai proyek.',
            ],
            [
                'icon' => 'fa-user-shield',
                'title' => 'Keamanan dan Privasi',
                'desc' =>
                    'Data Anda dijaga sesuai Kebijakan Privasi kami dan hanya digunakan untuk kebutuhan layanan. Kami menggunakan enkripsi dan standar keamanan terbaik.',
            ],
            [
                'icon' => 'fa-mobile-screen-button',
                'title' => 'Akses Aplikasi dan Perangkat',
                'desc' =>
                    'Aplikasi kami dapat meminta akses ke perangkat Anda seperti kamera atau lokasi. Informasi digunakan untuk meningkatkan fungsi layanan. Pastikan pengaturan perangkat sesuai preferensi.',
            ],
            [
                'icon' => 'fa-link',
                'title' => 'Tautan ke Pihak Ketiga',
                'desc' =>
                    'Kami mungkin menyertakan tautan ke situs lain. Kami tidak bertanggung jawab atas isi atau kebijakan privasi situs pihak ketiga. Gunakan dengan risiko Anda sendiri.',
            ],
            [
                'icon' => 'fa-triangle-exclamation',
                'title' => 'Batasan Tanggung Jawab',
                'desc' =>
                    'Kami tidak menjamin layanan akan selalu bebas gangguan. Kami tidak bertanggung jawab atas kerugian akibat penggunaan layanan, sejauh diizinkan hukum.',
            ],
            [
                'icon' => 'fa-scale-balanced',
                'title' => 'Penyelesaian Sengketa',
                'desc' =>
                    'Sengketa akan diselesaikan secara musyawarah terlebih dahulu. Jika tidak berhasil, akan dibawa ke Pengadilan Negeri Sleman, Yogyakarta.',
            ],
            [
                'icon' => 'fa-pen-to-square',
                'title' => 'Perubahan Ketentuan',
                'desc' =>
                    'Kami berhak memperbarui ketentuan tanpa pemberitahuan. Dengan terus menggunakan layanan, Anda dianggap menyetujui versi terbaru. Periksa halaman ini secara berkala.',
            ],
        ];
    @endphp

    <div class="row g-4">
        @foreach ($terms as $item)
            <div class="col-12">
                <div class="p-4 border rounded-4 shadow-sm bg-white h-100">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fa-solid {{ $item['icon'] }} fa-lg me-3 text-primary"></i>
                        <h5 class="fw-bold text-dark mb-0">{{ $item['title'] }}</h5>
                    </div>
                    <p class="text-muted mb-0" style="text-align: justify;">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>


@include('template.footer')
