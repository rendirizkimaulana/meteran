@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-4">Penanganan Tunggakan 1 Bulan - PT Citacontrac</h2>

  <p class="lead">Halaman ini menjelaskan prosedur dan langkah-langkah yang dilakukan oleh PT Citacontrac dalam menangani pelanggan yang menunggak pembayaran selama 1 bulan.</p>

  <hr>

  <h4>1. Identifikasi dan Monitoring</h4>
  <ul>
    <li>Petugas akan melakukan pengecekan data pelanggan secara sistemik melalui dashboard monitoring.</li>
    <li>Data yang diperiksa mencakup: nomor pelanggan, status tagihan, dan riwayat pembayaran.</li>
  </ul>

  <h4>2. Pemberitahuan Tunggakan</h4>
  <ul>
    <li>Pelanggan akan menerima notifikasi melalui SMS atau email berisi informasi jumlah tunggakan dan tenggat waktu pembayaran.</li>
    <li>Jika pelanggan belum merespons, petugas akan memberikan surat peringatan ke alamat pelanggan.</li>
  </ul>

  <h4>3. Kunjungan Lapangan</h4>
  <ul>
    <li>Tim lapangan akan ditugaskan untuk mengunjungi pelanggan yang belum melunasi tunggakan selama 1 bulan.</li>
    <li>Tujuannya adalah melakukan pendekatan persuasif dan menawarkan solusi pembayaran, misalnya cicilan.</li>
  </ul>

  <h4>4. Tindakan Lanjutan (Jika Tetap Menunggak)</h4>
  <ul>
    <li>Jika tunggakan tidak diselesaikan, PT Citacontrac berhak melakukan pemutusan sementara sambungan listrik.</li>
    <li>Biaya pemutusan dan penyambungan ulang akan dibebankan kepada pelanggan.</li>
  </ul>

  <h4>5. Penyambungan Kembali</h4>
  <ul>
    <li>Setelah pembayaran lunas, pelanggan dapat mengajukan permintaan penyambungan kembali.</li>
    <li>Tim teknis akan menjadwalkan penyambungan ulang dalam waktu maksimal 1x24 jam kerja setelah verifikasi.</li>
  </ul>

  <h4>6. Asosiasi dengan PLN Mobile</h4>
  <p>PT Citacontrac mendorong pelanggan untuk menggunakan <strong>PLN Mobile</strong> sebagai sarana resmi dari PLN untuk:</p>
  <ul>
    <li>Memantau status tagihan dan tunggakan secara real-time.</li>
    <li>Melakukan pembayaran langsung melalui aplikasi.</li>
    <li>Mendapatkan notifikasi jatuh tempo pembayaran.</li>
    <li>Mengajukan pengaduan atau permintaan layanan teknis.</li>
  </ul>
  <p>Pelanggan dapat mengunduh <strong>PLN Mobile</strong> melalui:</p>
  <ul>
    <li><a href="https://play.google.com/store/apps/details?id=com.icon.pln123" target="_blank">Google Play Store (Android)</a></li>
    <li><a href="https://apps.apple.com/id/app/pln-mobile/id1502493371" target="_blank">App Store (iOS)</a></li>
  </ul>

  <div class="alert alert-warning mt-4">
    <strong>Catatan:</strong> PT Citacontrac selalu mengedepankan pendekatan persuasif dan edukatif kepada pelanggan. Pemutusan sambungan adalah langkah terakhir jika seluruh pendekatan sebelumnya tidak diindahkan.
  </div>
</div>
@endsection
