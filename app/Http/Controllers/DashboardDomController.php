<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;
use PDF;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
            'domisilis' => Domisili::latest()->paginate(8),
            'totalDomisili' => Domisili::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.domisilis.create', [
            'title' => 'Domisili',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodeSurat' => 'required|numeric',
            'noSurat' => 'required|numeric',
            'nama' => 'required|max:255',
            'nik' => 'required|numeric',
            'tempatTglLahir' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'alamat' => 'required',
            'keterangan' => 'required',
            'tglSurat' => 'required|date',
            'ttd' => 'required|max:255',
            'namaTtd' => 'required|max:255',
        ]);

        Domisili::create($validatedData);

        return redirect('/dashboard/domisili')->with('success', 'Surat berhasil ditambahkan!');
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
        return view('dashboard.domisilis.edit', [
            'title' => 'Edit',
            'domisili' => $domisili,
        ]);
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
        $rules = [
            'kodeSurat' => 'required|numeric',
            'nama' => 'required|max:255',
            'nik' => 'required|numeric',
            'tempatTglLahir' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'tglSurat' => 'required|date',
            'ttd' => 'required|max:255',
            'namaTtd' => 'required|max:255',
        ];

        if ($request->noSurat != $domisili->noSurat) {
            $rules['noSurat'] = 'required|numeric|unique:domisilis';
        }

        $validatedData = $request->validate($rules);

        Domisili::where('id', $domisili->id)
            ->update($validatedData);

        return redirect('/dashboard/domisili')->with('success', 'Surat berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domisili $domisili)
    {
        Domisili::destroy($domisili->id);

        return redirect('/dashboard/domisili')->with('success', 'Surat berhasil dihapus!');
    }

    public function cetak(Domisili $domisili)
    {
        $pdf = PDF::loadview('dashboard.domisilis.cetak', [
            'title' => 'Cetak',
            'domisili' => $domisili,
        ])->setPaper('a4', 'potrait');
        return $pdf->stream('Domisili_' . '' . $domisili->noSurat . '.pdf');
    }
}
