@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Materi Instalasi Listrik</h1>

    {{-- Safety Wear --}}
    <div class="mb-4">
        <h3 class="text-primary">Safety Wear</h3>
        <ul class="list-group">
            <li class="list-group-item">Helm</li>
            <li class="list-group-item">Sarung Tangan</li>
            <li class="list-group-item">Sepatu</li>
        </ul>
    </div>

    {{-- Seragam --}}
    <div class="mb-4">
        <h3 class="text-primary">Seragam</h3>
        <ul class="list-group">
            <li class="list-group-item">Resmi dari PLN</li>
        </ul>
    </div>

    {{-- Alat --}}
    <div class="mb-4">
        <h3 class="text-primary">Alat</h3>
        <ul class="list-group">
            <li class="list-group-item">Obeng + -</li>
            <li class="list-group-item">Tespen</li>
            <li class="list-group-item">Tang Potong</li>
        </ul>
    </div>

    {{-- Material Resmi dari PLN --}}
    <div class="mb-4">
        <h3 class="text-primary">Material (Resmi dari PLN)</h3>
        <ul class="list-group">
            <li class="list-group-item">KWH Meter (dari PLN)</li>
            <li class="list-group-item">Kabel SR/DX</li>
            <li class="list-group-item">Segel (Resmi dari PLN)</li>
            <li class="list-group-item">MCB (Sesuai Daya)</li>
        </ul>
    </div>

    {{-- Material Pelanggan --}}
    <div class="mb-4">
        <h3 class="text-primary">Material Pelanggan</h3>
        <ul class="list-group">
            <li class="list-group-item">Kabel Instalasi Dalam Rumah (sudah siap)</li>
            <li class="list-group-item">Kabel Tufur</li>
            <li class="list-group-item">Grounding</li>
            <li class="list-group-item">Solatip</li>
        </ul>
    </div>
</div>
@endsection
