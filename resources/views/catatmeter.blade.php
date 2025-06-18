@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Informasi Pencatatan Meteran</h2>
        <p class="text-muted">PT CitaContrac bekerja sama dengan PLN untuk proses pencatatan meteran listrik yang transparan dan efisien.</p>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="ratio ratio-16x9 rounded shadow">
                <video controls poster="https://images.unsplash.com/photo-1581093458791-869b0d1419d1">
                    <source src="{{ asset('assets/catatmeter.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Apa itu Catat Meteran?</h4>
            <p>
                Catat Meteran adalah proses mencatat angka konsumsi listrik pelanggan secara berkala untuk mengetahui jumlah penggunaan kWh yang akan ditagihkan setiap bulan.
            </p>
            <h5>Tujuan:</h5>
            <ul>
                <li>Menjamin akurasi dalam penagihan listrik</li>
                <li>Menghindari kesalahan pencatatan manual</li>
                <li>Memberikan edukasi kepada pelanggan mengenai konsumsi listrik</li>
            </ul>
        </div>
    </div>

    <div class="mb-5">
        <h4>Bagaimana Prosesnya?</h4>
        <ol>
            <li>Pelanggan melihat angka pada meteran listrik rumah atau kantor mereka</li>
            <li>Pelanggan mencatat angka tersebut di platform simulasi PT CitaContrac</li>
            <li>Data diverifikasi untuk dianalisis atau digunakan dalam simulasi pembayaran</li>
        </ol>
    </div>

    <div class="mb-5">
        <h4>Peran CitaContrac sebagai Mitra PLN</h4>
        <p>
            PT CitaContrac merupakan perusahaan mitra resmi PLN yang ditunjuk untuk membantu proses pencatatan dan monitoring konsumsi listrik pelanggan secara langsung di lapangan. Dalam kerjasama ini, CitaContrac bertugas memastikan bahwa data yang diperoleh dari meteran listrik benar-benar akurat dan dapat dipertanggungjawabkan, sebagai dasar perhitungan tagihan listrik bulanan.
        </p>
        <p>
            Para petugas lapangan dari CitaContrac telah dibekali pelatihan dan identitas resmi untuk menjalankan tugasnya secara profesional. Mereka melakukan pencatatan dengan sistem digital, mengurangi potensi kesalahan akibat pencatatan manual dan mempercepat proses pengiriman data ke sistem PLN pusat.
        </p>
    </div>

    <div class="mb-5">
        <h4>Manfaat bagi Pelanggan</h4>
        <ul>
            <li><strong>Transparansi:</strong> Pelanggan dapat mengetahui dengan jelas angka pemakaian listrik mereka setiap bulan.</li>
            <li><strong>Akurasi:</strong> Data meteran tercatat langsung oleh petugas resmi, meminimalkan kesalahan input.</li>
            <li><strong>Efisiensi:</strong> Proses digital mempersingkat waktu dan mengurangi potensi keterlambatan tagihan.</li>
        </ul>
        <p>
            Dengan adanya dukungan teknologi dan pelibatan pihak profesional seperti PT CitaContrac, PLN dapat terus meningkatkan kualitas layanan publik, terutama dalam pengelolaan dan distribusi energi listrik yang adil dan transparan.
        </p>
    </div>
</div>
@endsection
