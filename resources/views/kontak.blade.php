@extends('layouts.app')

@section('title', 'Hubungi Kami - PT Citacontrac')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="section-title">Hubungi Kami</h2>
            <p class="lead text-muted">
                Jika Anda memiliki pertanyaan atau butuh bantuan, tim kami siap membantu Anda!
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Informasi Kontak (Full Width) -->
            <div class="col-lg-6">
                <div class="feature-card p-4 h-100">
                    <div class="card-icon mb-3">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4 class="mb-3">Layanan Pelanggan</h4>
                    <div class="contact-info">
                        <div class="d-flex mb-3">
                            <i class="bi bi-geo-alt-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Alamat Kantor</h6>
                                <p class="text-muted mb-0">Jl. Pinang Ranti No.5, RT.15/RW.1, Pinang Ranti, Kec. Makasar, Kota Jakarta Timur</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Email</h6>
                                <p class="text-muted mb-0">info@citacontrac.com</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Telepon</h6>
                                <p class="text-muted mb-0">(021) 1234-5678</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-whatsapp text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">WhatsApp</h6>
                                <p class="text-muted mb-0">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-clock-fill text-primary me-2"></i>
                        <p class="mb-0 text-muted">Senin-Jumat: 08.00 - 17.00 WIB</p>
                    </div>
                </div>
            </div>

            <!-- Google Maps (Full Width) -->
            <div class="col-lg-6">
                <div class="feature-card h-100 overflow-hidden">
                    <div class="pln-ad-header">
                        <i class="bi bi-geo-alt-fill me-2"></i>Lokasi Kantor Kami
                    </div>
                    <div class="p-0">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5744531446473!2d106.87790719999999!3d-6.2887064999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29a44b0cbf7%3A0xbcf0d6fc2a8b8768!2sPT%20Citacontrac!5e0!3m2!1sen!2sid!4v1718420000000!5m2!1sen!2sid"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <div class="p-4">
                            <p class="text-muted mb-3">Silakan kunjungi kantor kami untuk konsultasi langsung dengan tim profesional kami.</p>
                            <a href="#" class="btn btn-outline-primary w-100">
                                <i class="bi bi-geo-alt-fill me-2"></i>Dapatkan Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <p class="text-muted">Temukan jawaban untuk pertanyaan yang sering diajukan</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="feature-card mb-3 border-0">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Bagaimana cara menghubungi customer service?
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Anda dapat menghubungi customer service kami melalui telepon di (021) 1234-5678, WhatsApp di +62 812-3456-7890, atau email ke info@citacontrac.com. Kami tersedia setiap hari kerja pukul 08.00 - 17.00 WIB.
                            </div>
                        </div>
                    </div>
                    
                    <div class="feature-card mb-3 border-0">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa saja layanan yang ditawarkan PT Citacontrac?
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami menyediakan berbagai layanan termasuk simulasi instalasi meteran listrik, pelatihan teknis, konsultasi bisnis, dan solusi manajemen energi. Silakan kunjungi halaman layanan kami untuk informasi lebih detail.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection