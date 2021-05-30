<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourrierRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Exception;
use App\Models\Courrier;
use PhpParser\Node\Stmt\Echo_;

class CourrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('gestionnaire');
    }
    public function index()
    {
        $courrier= Courrier::all();
        return view('gestionnaire.courrier.index',compact('courrier'));
    }
    public function add()
    {
        return view('gestionnaire.courrier.add');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required',
            'file' => 'required',
            'date' =>'required',
            'priority' =>'required',

        ]);
        try {
            $request->all();
            $c =new Courrier();
            $c -> from = $request -> from;
            $c -> to = $request -> to;
            $c -> date = $request -> date;
            $c -> priority = $request -> priority;
            if ( $request -> hasFile('file') ) {
                $c -> file = $request -> file ->store('posts');
            }
            $c->save();
            session()->flash('succes','Le corrierr bien ajouter');
            return view('gestionnaire.courrier.index');


        } catch (Exception $exception) {

            if($exception->getCode() === '23000') {

                session()->flash('errourCourier','Le corrierr ne pas ajouter');
                return view('livewire.gestionnaire.courrier.add');

            }

        }
    }
}
