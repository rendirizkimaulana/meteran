@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Kuiz</h4>

    <form action="{{ route('kuiz.submit') }}" method="POST">
        @csrf

        @foreach ($questions as $q)
            <div class="mb-4">
                <strong>{{ $loop->iteration }}. {{ $q->question }}</strong>
                <div>
                    <label><input type="radio" name="question_{{ $q->id }}" value="a" required> {{ $q->option_a }}</label><br>
                    <label><input type="radio" name="question_{{ $q->id }}" value="b"> {{ $q->option_b }}</label><br>
                    <label><input type="radio" name="question_{{ $q->id }}" value="c"> {{ $q->option_c }}</label><br>
                    <label><input type="radio" name="question_{{ $q->id }}" value="d"> {{ $q->option_d }}</label>
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Kumpulkan Jawaban</button>
    </form>
</div>
@endsection
