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
            'from' => 'required|string',
            'to' => 'required|string',
            'file' => 'required|string',
            'date' =>'required|string',
            'priority' =>'required|string',

            ]);


        $courrier = new Courrier();

        // if ($request->hasFile('file')) {
        //    $completeFileName = $request->file('file')->getClientOriginalName();
        //    $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        //     $extension = $request->file('file')->getClientOriginalExtension();
        //     $compPic = str_replace('', '', $fileNameOnly).'-'.rand() .''.time() .'.'.$extension;
        //     $path = $request->file('file')->storeAs('public/posts', $compPic);
           
        //    $courrier->image=$compPic;
       
        // }
        if ($request->hasFile('file')) {
            //Get Just Ext
            $extention = $request->file('file')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload file
            $path = $request->file('file')->storeAs('public/posts', $fileNameToStore);
            $courrier->file = $fileNameToStore;
        }
        $courrier->from = $this->from;
        $courrier->priority = $this->priority;
        $courrier->to = $this->to;

        $courrier->date = $this->date;
        $courrier->save();
     
        

 
    }
}
