<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Courrier;

class CourrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('gestionnaire');
    }
    public function index()
    {
        $courriers= Courrier::latest()->get();
        return view('gestionnaire.courrier.index',compact('courriers'));
    }
    public function add()
    {
        return view('gestionnaire.courrier.add');
    }
}
