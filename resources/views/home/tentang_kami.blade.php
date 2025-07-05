@include('template.header')

<style>
    body {
        background-color: #f8f9fa;
    }

    .section-title {
        font-weight: 700;
        font-size: 36px;
        margin-bottom: 1rem;
        color: #0A3478;
    }

    .lead {
        font-size: 1.1rem;
    }

    .highlight-blue {
        background: linear-gradient(to bottom, #ffffff, #3f7fc3);
        color: white;
    }

    .highlight-blue p,
    .highlight-blue h4,
    .highlight-blue h2 {
        color: black !important;
    }

    .highlight-box {
        background-color: #ffffff;
        border-left: 5px solid #0A3478;
        border-radius: 10px;
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .highlight-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    }

    .icon-primary {
        color: #0A3478;
    }

    .icon-accent {
        color: #3F7FC3;
    }

    .contact-card {
        border-top: 4px solid #0A3478;
        background-color: #ffffff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        /* shadow awal */
    }

    .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        /* shadow saat hover */
    }

    .contact-card i {
        transition: transform 0.3s ease;
    }

    .contact-card:hover i {
        transform: scale(1.2);
    }
</style>

<!-- Tentang Kami -->
<section class="py-5 highlight-blue" style="margin-top: 50px">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Tentang Kami</h2>
        <p class="lead text-center mb-5">
            BangunRupa adalah solusi digital terpercaya untuk layanan desain bangunan yang mengedepankan kemudahan,
            kecepatan, dan kualitas.
        </p>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('img/hero.png') }}" alt="Tentang Kami" class="img-fluid rounded-4 shadow-sm" />
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <h4 class="fw-bold mb-3">Apa Itu BangunRupa?</h4>
                <p>
                    BangunRupa hadir sebagai platform yang mempertemukan calon pemilik bangunan dengan para arsitek dan
                    desainer profesional.
                    Kami memahami bahwa proses membangun atau merenovasi rumah bisa kompleks, dan kami bertujuan untuk
                    menyederhanakan proses tersebut
                    melalui layanan digital yang transparan dan efisien.
                </p>
                <p>
                    Kami memiliki visi untuk menjadi referensi utama dalam dunia arsitektur digital di Indonesia, serta
                    menyediakan solusi yang relevan bagi masyarakat yang ingin memiliki bangunan impian tanpa proses
                    yang rumit.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-md-4 mb-4">
                <div class="highlight-box">
                    <i class="fa-solid fa-bullseye fa-2x mb-3 icon-primary"></i>
                    <h5 class="fw-bold">Visi</h5>
                    <p class="text-muted">
                        Menjadi platform terdepan dalam layanan desain arsitektur digital yang inovatif, praktis, dan
                        terjangkau.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="highlight-box">
                    <i class="fa-solid fa-eye fa-2x mb-3 icon-primary"></i>
                    <h5 class="fw-bold">Misi</h5>
                    <p class="text-muted">
                        Memberikan kemudahan akses terhadap jasa desain bangunan berkualitas tinggi dengan proses online
                        yang aman dan cepat.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="highlight-box">
                    <i class="fa-solid fa-house-chimney-window fa-2x mb-3 icon-primary"></i>
                    <h5 class="fw-bold">Layanan Kami</h5>
                    <p class="text-muted">
                        Konsultasi arsitektur, pemesanan desain rumah, inspirasi desain, dan kemudahan transaksi digital
                        dalam satu platform.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mb-4">
            <h4 class="fw-bold text-primary">Keunggulan BangunRupa</h4>
        </div>
        <ul class="list-unstyled text-muted text-center">
            <li class="mb-2"><i class="fa fa-check-circle text-success me-2"></i> Platform berbasis teknologi modern
            </li>
            <li class="mb-2"><i class="fa fa-check-circle text-success me-2"></i> Koleksi desain beragam dan terus
                diperbarui</li>
            <li class="mb-2"><i class="fa fa-check-circle text-success me-2"></i> Didukung tim profesional dan
                berpengalaman</li>
            <li class="mb-2"><i class="fa fa-check-circle text-success me-2"></i> Layanan customer service responsif
            </li>
            <li class="mb-2"><i class="fa fa-check-circle text-success me-2"></i> Harga bersaing dan transparan</li>
        </ul>
    </div>
</section>

<!-- Kontak -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <h3 class="section-title text-center text-dark mb-5">Kontak Kami</h3>
        <div class="row justify-content-center g-4">
            <!-- Email -->
            <div class="col-md-4">
                <div class="contact-card text-center p-4 h-100 rounded-4 shadow-sm">
                    <div class="mb-3">
                        <i class="fa-solid fa-envelope fa-2x icon-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Email</h5>
                    <p><a href="mailto:bangunrupa@example.com"
                            class="text-decoration-none text-dark">bangunrupa@example.com</a></p>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="col-md-4">
                <div class="contact-card text-center p-4 h-100 rounded-4 shadow-sm">
                    <div class="mb-3">
                        <i class="fa-brands fa-whatsapp fa-2x text-success"></i>
                    </div>
                    <h5 class="fw-bold mb-2">WhatsApp</h5>
                    <p><a href="https://wa.me/6287889912710" class="text-decoration-none text-dark">+62
                            878-8991-2710</a></p>
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-md-4">
                <div class="contact-card text-center p-4 h-100 rounded-4 shadow-sm">
                    <div class="mb-3">
                        <i class="fa-brands fa-instagram fa-2x icon-accent"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Instagram</h5>
                    <p><a href="https://instagram.com/websitebangunrupa"
                            class="text-decoration-none text-dark">@websitebangunrupa</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template.footer')
