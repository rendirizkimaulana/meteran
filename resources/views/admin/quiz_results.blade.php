@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <!-- Judul Halaman -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>Hasil Kuiz User</strong>
        </div>

        <div class="card-body">
            <!-- Form Pencarian -->
            <form action="{{ route('quiz.results') }}" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama user..." value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </div>
            </form>

            <!-- Tabel Hasil -->
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama User</th>
                        <th>Skor</th>
                        <th>Waktu</th>
                        <th>Aksi</th> <!-- Kolom baru -->
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $r)
                        <tr>
                            <td>{{ $r->user->name }}</td>
                            <td>{{ $r->score }}</td>
                            <td>{{ $r->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <form method="POST" action="{{ route('quiz.results.delete', $r->id) }}" onsubmit="return confirm('Yakin ingin menghapus hasil ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada hasil kuiz</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
@endsection
