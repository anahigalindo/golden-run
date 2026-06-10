<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'zone',
        'bpm',
        'spotify_url',
    ];

    public function runs()
    {
        return $this->hasMany(Run::class);
    }
}