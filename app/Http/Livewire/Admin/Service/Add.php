<?php

namespace App\Http\Livewire\Admin\Service;
use Auth;
use App\Models\Service;




use Livewire\Component;

class Add extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.admin.service.add');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|string',
        ]);
        $services = new Service();
        $services->name = $this->name;
        $services->save();
        session()->flash('succes','bien ajouter');

    }

}
