<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;

class UserQuizController extends Controller
{
    public function index()
    {
        $questions = Quiz::all();
        return view('quiz_index', compact('questions'));
    }

    public function submit(Request $request)
    {
        $questions = Quiz::all();
        $score = 0;

        foreach ($questions as $q) {
            $userAnswer = $request->input("question_$q->id");
            if ($userAnswer === $q->correct_option) {
                $score += 1;
            }
        }

        QuizResult::create([
            'user_id' => Auth::id(),
            'score' => $score,
        ]);

        // Ambil semua hasil user untuk ditampilkan
        $results = QuizResult::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('quiz_result', compact('results'))
                ->with('success', 'Kuiz telah disubmit. Skor kamu: ' . $score);
    }

    public function result()
    {
        $results = QuizResult::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('quiz_result', compact('results'));
    }
}
