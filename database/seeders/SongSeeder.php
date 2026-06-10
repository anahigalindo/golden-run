<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            // Zona 1 — Niall (60-80 BPM)
            ['title' => 'This Town', 'artist' => 'Niall Horan', 'zone' => 1, 'bpm' => 76, 'spotify_url' => null],
            ['title' => 'Slow Hands', 'artist' => 'Niall Horan', 'zone' => 1, 'bpm' => 69, 'spotify_url' => null],
            ['title' => 'Too Much to Ask', 'artist' => 'Niall Horan', 'zone' => 1, 'bpm' => 78, 'spotify_url' => null],

            // Zona 2 — Louis (80-100 BPM)
            ['title' => 'Two of Us', 'artist' => 'Louis Tomlinson', 'zone' => 2, 'bpm' => 92, 'spotify_url' => null],
            ['title' => 'Always You', 'artist' => 'Louis Tomlinson', 'zone' => 2, 'bpm' => 88, 'spotify_url' => null],
            ['title' => 'Just Like You', 'artist' => 'Louis Tomlinson', 'zone' => 2, 'bpm' => 95, 'spotify_url' => null],

            // Zona 3 — One Direction (100-120 BPM)
            ['title' => 'Story of My Life', 'artist' => 'One Direction', 'zone' => 3, 'bpm' => 121, 'spotify_url' => null],
            ['title' => 'Little Things', 'artist' => 'One Direction', 'zone' => 3, 'bpm' => 106, 'spotify_url' => null],
            ['title' => 'What Makes You Beautiful', 'artist' => 'One Direction', 'zone' => 3, 'bpm' => 119, 'spotify_url' => null],

            // Zona 4 — Harry (120-140 BPM)
            ['title' => 'As It Was', 'artist' => 'Harry Styles', 'zone' => 4, 'bpm' => 174, 'spotify_url' => null],
            ['title' => 'Watermelon Sugar', 'artist' => 'Harry Styles', 'zone' => 4, 'bpm' => 95, 'spotify_url' => null],
            ['title' => 'Adore You', 'artist' => 'Harry Styles', 'zone' => 4, 'bpm' => 138, 'spotify_url' => null],

            // Zona 5 — Zayn y Liam (140-160 BPM)
            ['title' => 'PILLOWTALK', 'artist' => 'Zayn', 'zone' => 5, 'bpm' => 140, 'spotify_url' => null],
            ['title' => 'Strip That Down', 'artist' => 'Liam Payne', 'zone' => 5, 'bpm' => 104, 'spotify_url' => null],
            ['title' => 'Dusk Till Dawn', 'artist' => 'Zayn', 'zone' => 5, 'bpm' => 143, 'spotify_url' => null],
        ];

        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}