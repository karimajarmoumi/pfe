<?php

namespace App\Http\Controllers\Membre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Courrier;

class CourrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('membre');
    }
    public function index()
    {
        $courriers= Courrier::latest()->get();
        return view('membre.courrier.index',compact('courriers'));
    }
    public function add()
    {
        return view('membre.courrier.add');
    }
}
