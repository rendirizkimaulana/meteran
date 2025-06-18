@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4 fw-bold">Hubungi Kami</h2>
    <p class="text-center mb-5 text-muted">
        Jika Anda memiliki pertanyaan, butuh bantuan teknis, atau ingin bekerja sama dengan kami, jangan ragu untuk menghubungi kami melalui informasi di bawah ini. Kami siap membantu Anda!
    </p>

    <div class="row">
        <!-- Informasi Kontak -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="bi bi-telephone-fill me-2"></i>Informasi Kontak</h5>
                    <p><strong>Alamat:</strong> Jl. Pinang Ranti No.5, RT.15/RW.1, Pinang Ranti, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13560</p>
                    <p><strong>Email:</strong> info@citacontrac.com</p>
                    <p><strong>Telepon:</strong> (021) 1234-5678</p>
                    <p><strong>WhatsApp:</strong> +62 812-3456-7890</p>
                    <hr>
                    <p class="text-muted">Kami tersedia setiap hari kerja pukul 08.00 - 17.00 WIB. Jangan ragu untuk menghubungi kami kapan saja!</p>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg h-100 border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Lokasi Kami</h5>
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5744531446473!2d106.87790719999999!3d-6.2887064999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29a44b0cbf7%3A0xbcf0d6fc2a8b8768!2sPT%20Citacontrac!5e0!3m2!1sen!2sid!4v1718420000000!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                    <p class="mt-3 text-muted">Silakan kunjungi kantor kami untuk informasi lebih lanjut atau konsultasi langsung.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
