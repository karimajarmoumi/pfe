<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('chef');
    }
    public function index()
    {
        return view('chef.dashboard');
    }
}
