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
            'active' => 'dashboard',
            'domisilis' => Domisili::latest()->paginate(10),
            'usahas' => Usaha::latest()->paginate(10),
        ]);
    }
}
