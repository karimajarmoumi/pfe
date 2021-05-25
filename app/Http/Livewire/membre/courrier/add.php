<?php

namespace App\Http\Livewire\membre\Courrier;

use App\Models\Courrier;
use Livewire\Component;
use Auth;
use GuzzleHttp\Psr7\Request;

class Add extends Component
{
    public $from;
    public $to;
    public $courrier_id;
    public $file;
    public $priority;
    public $date;
    public function render()
    {
        return view('livewire.membre.courrier.add');
    }
    public function store(Request $req)
    {
        $this->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'file' => 'required|string',
            'courrier_id' =>'required|integer',
            'date' =>'required|string',
            'priority' =>'required|string',

            ]);
        $courrier = new Courrier();
        $courrier->from = $this->from;
        $courrier->priority = $this->priority;
        $courrier->to = $this->to;
        $courrier->file = $this->file;
        $courrier->courrier_id = $this->courrier_id;
        $courrier->date = $this->date;
        $courrier->save();
        session()->flash('succes','bien ajouter');
        return $req->file('file')->store('app');

    }
}
