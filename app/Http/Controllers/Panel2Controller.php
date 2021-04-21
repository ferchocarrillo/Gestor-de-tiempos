<?php

namespace App\Http\Controllers;

use App\Panel2;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Panel2Controller extends Controller
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
     
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function show(Panel2 $panel2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function edit(Panel2 $panel2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panel2 $panel2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel2 $panel2)
    {
        //
    }
}
