<?php

namespace App\Http\Livewire\Admin\Service;
use Auth;
use App\Models\Service;
use Illuminate\Support\Facades\DB;


use Livewire\Component;

class Edit extends Component
{
    public $service_id;
    public $name;
    public function render()
    {
        return view('livewire.admin.service.edit');
    }
    public function mount($services)
    {
        $this->name = $services->name;
        $this->service_id = $services->service_id;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string',
        ]);
        $services = Service::find($this->service_id);
        $services->name = $this->name;
        $services->save();
        session()->flash('succes','bien modifier');
        $users = DB::select('select * from users');

    }
}
