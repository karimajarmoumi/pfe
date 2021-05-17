<?php

namespace App\Http\Livewire\Admin\Users;
use Auth;
use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Service;

class Add extends Component
{
    public $name;
    public $role_id;
    public $email;
    public $password;
    public $service_id;
    public function render()
    {
        return view('livewire.admin.users.add');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => 'required|integer',
            'service_id' => 'required|integer',

            ]);

        $users = new User();
        $users->name = $this->name;
        $users->password = $this->password;
        $users->email = $this->email;
        $users->role_id = $this->role_id;
        $users->service_id = $this->service_id;
        $users->save();
        session()->flash('succes','bien ajouter');
    }
}
