<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;

    // Jika nama tabel bukan jamak dari nama model, bisa ditambahkan:
    // protected $table = 'quiz_results';

    protected $fillable = [
        'user_id',
        'score',
    ];

    /**
     * Relasi: Hasil kuiz milik seorang user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
