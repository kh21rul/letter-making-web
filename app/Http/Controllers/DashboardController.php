<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Usaha;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'domisilis' => Domisili::latest()->paginate(5),
            'usahas' => Usaha::latest()->paginate(5),
            'totalDomisili' => Domisili::count(),
            'totalUsaha' => Usaha::count(),
        ]);
    }
}
