@extends('layouts.admin')

@section('content')
<div class="container">

    <h4>Tambah Pertanyaan Kuiz</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form Tambah Kuiz --}}
    <form method="POST" action="{{ route('quiz.store') }}">
        @csrf
        <div class="mb-3"><input type="text" name="question" class="form-control" placeholder="Pertanyaan" required></div>

        <div class="row mb-3">
            <div class="col"><input type="text" name="option_a" class="form-control" placeholder="Pilihan A" required></div>
            <div class="col"><input type="text" name="option_b" class="form-control" placeholder="Pilihan B" required></div>
        </div>
        <div class="row mb-3">
            <div class="col"><input type="text" name="option_c" class="form-control" placeholder="Pilihan C" required></div>
            <div class="col"><input type="text" name="option_d" class="form-control" placeholder="Pilihan D" required></div>
        </div>
        <div class="mb-3">
            <select name="correct_option" class="form-select" required>
                <option value="" disabled selected>Jawaban Benar</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>

    {{-- Tabel Daftar Soal --}}
    <div class="card mt-5">
        <div class="card-header">
            <strong>Daftar Pertanyaan Kuiz</strong>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered m-0">
                <thead class="table-light">
                    <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban Benar</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(\App\Models\Quiz::all() as $q)
                        <tr>
                            <td>{{ $q->question }}</td>
                            <td>{{ strtoupper($q->correct_option) }}</td>
                            <td>
                                <a href="{{ route('quiz.edit', $q->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('quiz.destroy', $q->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if(\App\Models\Quiz::count() == 0)
                        <tr>
                            <td colspan="3" class="text-center text-muted">Belum ada soal kuiz.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
