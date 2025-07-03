@include('template.header')

<section class="container py-5" style="margin-top: 50px;">
    <h1 class="text-center text-primary fw-bold mb-5">Kontak Kami</h1>

    <div class="row g-4">
        <!-- Informasi Kontak -->
        <div class="col-md-5">
            <div class="d-flex flex-column gap-4">
                <!-- Lokasi -->
                <div class="border rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-location-dot fa-xl text-primary me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Lokasi</h5>
                            <p class="mb-0">Jl. Meruya Selatan No.1, RT.4/RW.1, Joglo</p>
                            <p class="mb-0">Kec. Kembangan, Kota Jakarta Barat</p>
                            <p class="mb-0">Daerah Khusus Ibukota Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="border rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-flex align-items-start">
                        <i class="fa-brands fa-whatsapp fa-xl text-success me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">WhatsApp</h5>
                            <p class="mb-0">+62 878-8991-2710</p>
                            <small class="text-muted">(Chat Only)</small>
                        </div>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="border rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-phone fa-xl text-primary me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Telepon</h5>
                            <p class="mb-0">021 5587234</p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="border rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-envelope fa-xl text-primary me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p class="mb-0">bangunrupa@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="col-md-7">
            <div class="rounded-4 overflow-hidden shadow-sm" style="height: 100%; min-height: 500px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1435924635055!2d106.7360385749949!3d-6.209750662513895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71f5a41c197%3A0x628259f9e8d6d7b4!2sUniversitas%20Mercu%20Buana!5e0!3m2!1sid!2sid!4v1719842691899!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>


@include('template.footer')
