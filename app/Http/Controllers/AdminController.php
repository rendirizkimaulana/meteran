<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua hasil kuiz beserta nama user-nya
        $results = QuizResult::with('user')->latest()->get();

        // Kirim ke view
        return view('admin.dashboard', compact('results'));
    }
}


