<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $services= Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }
    public function add()
    {
        return view('admin.service.add');
    }
    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.service.edit',compact('services'));
    }
    public function delete($id)
    {
        Service::find($id)->delete();
        return redirect()->back()->with('succes','service suprimee');
    }
}
