<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class QuizResultController extends Controller
{
    // Menampilkan hasil kuiz + fitur pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');

        $results = QuizResult::with('user')
            ->when($search, function ($query, $search) {
                $query->whereHas('user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->get();

        return view('admin.quiz_results', compact('results'));
    }

    // Menghapus hasil kuiz berdasarkan ID
    public function destroy($id)
    {
        $result = QuizResult::findOrFail($id);
        $result->delete();

        return redirect()->route('quiz.results')->with('success', 'Hasil kuiz berhasil dihapus.');
    }
}
