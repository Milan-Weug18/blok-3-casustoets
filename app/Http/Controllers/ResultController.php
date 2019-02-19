<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('results.index')->with('results', Result::all());
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
     * @param  $id ID of the Result to show
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id ID of the Result to edit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $id ID of the Result to update
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // Nothing TODO ... yet
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id ID of the Result to destroy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Nothing TODO ... yet
    }
}
