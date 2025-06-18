@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('quiz.create') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <h4>Edit Pertanyaan Kuiz</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('quiz.update', $quiz->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <input type="text" name="question" class="form-control" value="{{ $quiz->question }}" required>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="option_a" class="form-control" value="{{ $quiz->option_a }}" required>
            </div>
            <div class="col">
                <input type="text" name="option_b" class="form-control" value="{{ $quiz->option_b }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="option_c" class="form-control" value="{{ $quiz->option_c }}" required>
            </div>
            <div class="col">
                <input type="text" name="option_d" class="form-control" value="{{ $quiz->option_d }}" required>
            </div>
        </div>
        <div class="mb-3">
            <select name="correct_option" class="form-select" required>
                <option value="" disabled>Pilih jawaban benar</option>
                <option value="a" {{ $quiz->correct_option == 'a' ? 'selected' : '' }}>A</option>
                <option value="b" {{ $quiz->correct_option == 'b' ? 'selected' : '' }}>B</option>
                <option value="c" {{ $quiz->correct_option == 'c' ? 'selected' : '' }}>C</option>
                <option value="d" {{ $quiz->correct_option == 'd' ? 'selected' : '' }}>D</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui Pertanyaan</button>
    </form>
</div>
@endsection
