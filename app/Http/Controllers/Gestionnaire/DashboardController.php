<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('gestionnaire');
    }
    public function index()
    {
        return view('secretaire.dashboard');
    }
}
