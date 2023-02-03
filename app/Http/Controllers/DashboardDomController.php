<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;

class DashboardDomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.domisilis.index', [
            'title' => 'Domisili',
            'active' => 'domisili',
            'domisilis' => Domisili::latest()->paginate(10),
        ]);
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
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function show(Domisili $domisili)
    {
        return view('dashboard.domisilis.show', [
            'title' => 'Domisili',
            'active' => 'domisili',
            'domisili' => $domisili,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function edit(Domisili $domisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domisili $domisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domisili $domisili)
    {
        //
    }
}
