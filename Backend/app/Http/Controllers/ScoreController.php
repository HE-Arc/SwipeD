<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScoreResource;
use App\Score;
use App\Game;
use App\Player;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ScoreResource::collection(Score::with('player')
                ->get())
                ->jsonSerialize();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $score = Score::create($request->all());
        return response()->json($score, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score $party
     * @return \Illuminate\Http\Response
     */
    public function show($gameId)
    {
        return ScoreResource::collection(Score::with('player')
                    ->where('scores.id', $gameId)
                    ->get())
                    ->jsonSerialize()[0];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Score $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        $score->update($request->all());

        return $score;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        $score->delete();

        return response()->json(null, 204);
    }
}
