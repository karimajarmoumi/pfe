<?php

namespace App\Http\Livewire\Gestionnaire\Courrier;
use Illuminate\Http\Request;


use App\Models\Courrier;
use Livewire\Component;
use Livewire\WithFileUploads;
use Auth;

class Add extends Component
{
    public $from;
    public $to;
    public $file;
    public $priority;
    public $date;
    public function render()
    {
        return view('livewire.gestionnaire.courrier.add');
    }
    public function store(Request $request)
    {
        $this->validate([
            'from' => 'required',
            'to' => 'required',
            'file' => 'required',
            'date' =>'required',
            'priority' =>'required',

            ]);
        $courrier = new Courrier();
        if ($request->hasFile('file')) {
            //Get Just Ext
            $extention = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload file
            $path = $request->file('file')->storeAs('public/posts', $fileNameToStore);
            $courrier->file = $fileNameToStore;
        }
        $courrier->from = $request->from;
        $courrier->priority = $request->priority;
        $courrier->to = $request->to;
        $courrier->date = $request->date;
        $courrier->save();
        session()->flash('succes','bien ajouter');




    }
}
