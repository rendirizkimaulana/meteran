<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizResult;

class QuizController extends Controller
{
    public function create()
    {
        $results = QuizResult::with('user')->latest()->get();
        $quizzes = Quiz::latest()->get(); // Untuk daftar kuiz yg sudah dibuat
        return view('admin.quiz_create', compact('results', 'quizzes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_option' => 'required|in:a,b,c,d',
        ]);

        Quiz::create($request->all());

        return redirect()->route('quiz.create')->with('success', 'Pertanyaan berhasil disimpan.');
    }

    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('admin.quiz_edit', compact('quiz'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_option' => 'required|in:a,b,c,d',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());

        return redirect()->route('quiz.create')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quiz.create')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
