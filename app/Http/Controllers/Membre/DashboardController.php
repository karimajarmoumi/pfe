<?php

namespace App\Http\Controllers\Membre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('membre');
    }
    public function index()
    {
        return view('membre.dashboard');
    }
}
