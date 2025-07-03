@include('template.header')

<section class="container py-5" style="margin-top: 50px; margin-bottom: 50px;">
    <h1 class="text-center fw-bold mb-5" style="color: #0A3478;">FAQ - BangunRupa</h1>

    <div class="accordion accordion-flush" id="faqAccordion">
        @php
            $faqs = [
                [
                    'question' => 'Mengenai apakah website BangunRupa ini?',
                    'answer' =>
                        'BangunRupa merupakan marketplace desain rumah untuk membantu mewujudkan hunian idaman Anda. Dapatkan desain hunian terbaik dengan mudah, hemat, dan berkualitas sesuai kebutuhan dan keinginan Anda. Desain rumah tinggal yang kami tawarkan dapat dibangun sesuai kebutuhan Anda dengan menyesuaikan kondisi yang ada.',
                ],
                [
                    'question' => 'Apa saja layanan yang diberikan oleh BangunRupa?',
                    'answer' =>
                        'BangunRupa menyediakan layanan desain rumah, konsultasi arsitektur, pembuatan gambar kerja, hingga jasa pembangunan rumah. Semua layanan ini dirancang untuk mempermudah proses memiliki rumah impian Anda.',
                ],
                [
                    'question' =>
                        'Bagaimana caranya menemukan desain rumah tinggal yang sesuai dengan kebutuhan dan keinginan saya?',
                    'answer' =>
                        'Anda dapat menggunakan fitur pencarian dan filter pada platform BangunRupa untuk menemukan desain rumah yang paling sesuai dengan preferensi, ukuran lahan, dan anggaran Anda. Tim kami juga siap membantu konsultasi dan rekomendasi desain.',
                ],
                [
                    'question' => 'Produk apa saja yang saya dapatkan ketika membeli desain di BangunRupa?',
                    'answer' =>
                        'Produk yang Anda dapatkan meliputi file gambar desain lengkap, termasuk denah, tampak, potongan, serta spesifikasi material dan perhitungan struktur sesuai standar yang berlaku.',
                ],
                [
                    'question' => 'Bagaimana cara membeli desain rumah tinggal?',
                    'answer' =>
                        'Anda dapat memilih desain yang diinginkan, kemudian mengikuti proses pembayaran yang tersedia di website. Setelah pembayaran terkonfirmasi, file desain akan dikirimkan ke email Anda atau bisa diunduh langsung dari akun BangunRupa Anda.',
                ],
                [
                    'question' => 'Apakah ada kuota pembelian untuk masing-masing desain?',
                    'answer' =>
                        'Tidak ada kuota pembelian. Anda dapat membeli desain sebanyak-banyaknya sesuai kebutuhan Anda tanpa batasan.',
                ],
                [
                    'question' => 'Bagaimana jika saya tidak menemukan desain yang sesuai dalam fitur pencarian?',
                    'answer' =>
                        'Anda dapat menghubungi tim kami untuk konsultasi khusus, agar kami dapat membantu merancang desain sesuai kebutuhan dan keinginan Anda secara khusus.',
                ],
                [
                    'question' => 'Berapa biaya yang harus saya bayar untuk konsultasi desain ini?',
                    'answer' =>
                        'Biaya konsultasi bervariasi tergantung pada tingkat layanan yang Anda pilih. Anda dapat menghubungi kami langsung untuk mendapatkan informasi harga terbaru dan paket layanan yang tersedia.',
                ],
                [
                    'question' =>
                        'Apakah saya harus sign up (mendaftarkan diri) untuk menggunakan layanan pada website ini?',
                    'answer' =>
                        'Untuk melakukan pembelian dan mengakses fitur lengkap, Anda disarankan untuk mendaftar dan membuat akun terlebih dahulu agar pengalaman Anda lebih terorganisir dan aman.',
                ],
            ];
        @endphp

        @foreach ($faqs as $index => $faq)
            <div class="accordion-item mb-3 shadow-sm rounded border-0">
                <h2 class="accordion-header" id="heading{{ $index }}">
                    <button class="accordion-button collapsed fw-semibold text-primary" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false"
                        aria-controls="collapse{{ $index }}">
                        {{ $faq['question'] }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body bg-light rounded-bottom" style="line-height: 1.7;">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


@include('template.footer')
