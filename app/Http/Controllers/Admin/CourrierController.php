<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Courrier;

class CourrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $courriers= Courrier::latest()->get();
        return view('admin.courrier.index',compact('courriers'));
    }
    public function add()
    {
        return view('admin.courrier.add');
    }
}
