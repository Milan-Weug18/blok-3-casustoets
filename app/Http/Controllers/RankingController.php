<?php

namespace App\Http\Controllers;

use App\Ranking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the unique pools in the ranking table
        // Using a SELECT DISTINCT
        $pools = Ranking::select('pool')->distinct()->get();

        // Get all the Rankings from that pool in the correct order
        // Each set of rankings is added to the pool object for use in the view
        foreach($pools as $pool) {
            $pool->rankings = Ranking::where('pool', $pool->pool)
                ->orderBy('p', 'DESC')
                ->orderBy('w', 'ASC')
                ->orderBy(DB::raw('sv-st'), 'DESC')->get();
        }

        // Let Laravel render the view with the pools data
        return view('rankings.index')->with('pools', $pools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Nothing TODO ... yet
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Nothing TODO ... yet
    }

    /**
     * Display the specified resource.
     *
     * @param  $id ID of the ranking to show
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id ID of the ranking to edit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $id ID of the ranking to update
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id ID of the ranking to destroy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Nothing TODO ... yet
    }
}
