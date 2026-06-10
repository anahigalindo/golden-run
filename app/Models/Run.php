<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Run extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'song_id',
        'zone',
        'distance',
        'duration',
        'avg_heart_rate',
        'with_dog',
        'run_date',
    ];

    protected $casts = [
        'with_dog' => 'boolean',
        'run_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}