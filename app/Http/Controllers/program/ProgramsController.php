<?php

namespace App\Http\Controllers\program;

use App\Http\Controllers\Controller;
use App\Models\programs;
use App\Http\Requests\StoreprogramsRequest;
use App\Http\Requests\UpdateprogramsRequest;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreprogramsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprogramsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit(programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprogramsRequest  $request
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprogramsRequest $request, programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(programs $programs)
    {
        //
    }
}
