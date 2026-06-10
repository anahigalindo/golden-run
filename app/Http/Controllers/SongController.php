<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function byZone($zone)
    {
        $songs = Song::where('zone', $zone)->get();

        return response()->json($songs);
    }

    public function random($zone)
    {
        $song = Song::where('zone', $zone)->inRandomOrder()->first();

        return response()->json($song);
    }
}