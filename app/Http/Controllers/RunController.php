<?php

namespace App\Http\Controllers;

use App\Models\Run;
use App\Models\Song;
use Illuminate\Http\Request;

class RunController extends Controller
{
    public function index(Request $request)
    {
        $runs = $request->user()
            ->runs()
            ->with('song')
            ->orderBy('run_date', 'desc')
            ->get();

        return response()->json($runs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'zone'           => 'required|integer|between:1,5',
            'distance'       => 'required|numeric|min:0',
            'duration'       => 'required|integer|min:1',
            'avg_heart_rate' => 'nullable|integer',
            'with_dog'       => 'boolean',
            'run_date'       => 'required|date',
        ]);

        $song = Song::where('zone', $request->zone)
            ->inRandomOrder()
            ->first();

        $run = Run::create([
            'user_id'        => $request->user()->id,
            'song_id'        => $song->id,
            'zone'           => $request->zone,
            'distance'       => $request->distance,
            'duration'       => $request->duration,
            'avg_heart_rate' => $request->avg_heart_rate,
            'with_dog'       => $request->with_dog ?? false,
            'run_date'       => $request->run_date,
        ]);

        return response()->json([
            'run'  => $run,
            'song' => $song,
        ], 201);
    }

    public function stats(Request $request)
    {
        $runs = $request->user()->runs()->with('song')->get();

        if ($runs->isEmpty()) {
            return response()->json([
                'total_runs'      => 0,
                'total_km'        => 0,
                'avg_duration'    => 0,
                'runs_with_dog'   => 0,
                'favorite_zone'   => null,
                'favorite_artist' => null,
            ]);
        }

        $favoriteZone = $runs->groupBy('zone')
            ->map->count()
            ->sortDesc()
            ->keys()
            ->first();

        $favoriteArtist = $runs->groupBy('song.artist')
            ->map->count()
            ->sortDesc()
            ->keys()
            ->first();

        return response()->json([
            'total_runs'      => $runs->count(),
            'total_km'        => round($runs->sum('distance'), 2),
            'avg_duration'    => round($runs->avg('duration')),
            'runs_with_dog'   => $runs->where('with_dog', true)->count(),
            'favorite_zone'   => $favoriteZone,
            'favorite_artist' => $favoriteArtist,
        ]);
    }
}