@include('template.header')

<section class="container py-5" style="margin-top: 90px;">
    <h1 class="text-center fw-bold text-primary mb-5">Kebijakan Privasi - BangunRupa</h1>

    @php
        $privacySections = [
            [
                'icon' => 'fa-shield-halved',
                'title' => 'Komitmen Kami terhadap Privasi Anda',
                'content' =>
                    'Privasi Anda sangat penting bagi kami. Melalui kebijakan ini, kami menjelaskan bagaimana kami mengumpulkan, menyimpan, menggunakan, dan melindungi informasi pribadi yang Anda berikan saat menggunakan situs BangunRupa. Dengan mengakses dan menggunakan layanan kami, Anda menyetujui praktik yang dijelaskan dalam kebijakan ini.',
            ],
            [
                'icon' => 'fa-user-circle',
                'title' => 'Informasi yang Kami Kumpulkan',
                'content' =>
                    'Kami mengumpulkan data pribadi seperti nama, email, nomor telepon, alamat, dan informasi pembayaran saat Anda mendaftar atau memesan. Untuk penyedia desain, kami juga mengumpulkan informasi tambahan seperti brand, portofolio, dan media sosial. Kami juga mencatat informasi teknis secara otomatis seperti IP dan aktivitas situs.',
            ],
            [
                'icon' => 'fa-bullseye',
                'title' => 'Bagaimana Kami Menggunakan Data Anda',
                'content' =>
                    'Data digunakan untuk memproses transaksi, mengelola akun, memberikan dukungan, serta menyempurnakan pengalaman Anda. Kami juga menggunakannya untuk keamanan dan analisis internal agar situs kami lebih efisien dan relevan.',
            ],
            [
                'icon' => 'fa-handshake',
                'title' => 'Berbagi Data dengan Pihak Ketiga',
                'content' =>
                    'Kami tidak menjual atau menyewakan data Anda. Namun, data dapat dibagikan kepada mitra terpercaya seperti penyedia pembayaran, logistik, cloud, dan mitra teknis yang menunjang layanan kami. Data juga dapat dibagikan jika diwajibkan oleh hukum.',
            ],
            [
                'icon' => 'fa-lock',
                'title' => 'Keamanan Data Pribadi Anda',
                'content' =>
                    'Kami menggunakan teknologi keamanan seperti SSL dan sistem kontrol akses untuk melindungi data Anda. Namun, karena transmisi internet tidak sepenuhnya aman, kami menganjurkan untuk menjaga kerahasiaan akun Anda.',
            ],
            [
                'icon' => 'fa-database',
                'title' => 'Masa Penyimpanan Informasi',
                'content' =>
                    'Informasi Anda disimpan selama akun aktif atau diperlukan untuk tujuan bisnis dan hukum. Anda berhak meminta penghapusan data kecuali diwajibkan disimpan oleh hukum.',
            ],
            [
                'icon' => 'fa-child',
                'title' => 'Penggunaan oleh Anak di Bawah Umur',
                'content' =>
                    'Situs ini tidak ditujukan untuk anak-anak di bawah usia 18 tahun. Jika Anda di bawah umur, harap gunakan situs ini di bawah pengawasan orang tua atau wali.',
            ],
            [
                'icon' => 'fa-link',
                'title' => 'Tautan ke Situs Pihak Ketiga',
                'content' =>
                    'Kami mungkin menyediakan tautan ke situs lain. Kebijakan privasi ini tidak berlaku di sana. Harap baca kebijakan masing-masing situs pihak ketiga.',
            ],
            [
                'icon' => 'fa-rotate',
                'title' => 'Perubahan Kebijakan Privasi',
                'content' =>
                    'Kami dapat memperbarui kebijakan ini sewaktu-waktu. Perubahan akan diumumkan di halaman ini, dan Anda dianggap menyetujui kebijakan yang diperbarui saat terus menggunakan layanan kami.',
            ],
            [
                'icon' => 'fa-envelope',
                'title' => 'Hubungi Kami',
                'content' =>
                    'Jika Anda memiliki pertanyaan tentang privasi, silakan hubungi kami di <a href="mailto:support@bangunrupa" class="text-primary">support@bangunrupa</a>. Kami siap membantu Anda.',
            ],
        ];
    @endphp

    <div class="row g-4">
        @foreach ($privacySections as $section)
            <div class="col-md-6">
                <div class="border rounded-4 shadow-sm p-4 h-100 bg-white">
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fa-solid {{ $section['icon'] }} fa-xl me-3 text-primary"></i>
                        <h5 class="fw-bold mb-0 text-dark">{{ $section['title'] }}</h5>
                    </div>
                    <p class="text-muted" style="text-align: justify;">{!! $section['content'] !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>


@include('template.footer')
