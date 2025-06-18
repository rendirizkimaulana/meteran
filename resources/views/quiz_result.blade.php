@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3">Riwayat Hasil Kuiz</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($results->count())
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Skor</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $r)
                    <tr>
                        <td>{{ $r->score }}</td>
                        <td>{{ $r->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-muted">Belum ada hasil kuiz yang kamu kerjakan.</p>
    @endif
</div>
@endsection
