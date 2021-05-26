<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $role_id;
    public $email;
    public $name;
    public $password;
    public $service_id;
    public function render()
    {
        return view('livewire.admin.users.edit');
    }
    public function mount($users)
    {
        $this->email = $users->email;
        $this->name = $users->name;
        $this->role_id = $users->role_id;
        $this->password = $users->password;
        $this->service_id = $users->service_id;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string',
        ]);
        $users = User::find($this->user_id);
        $users->name = $this->name;
        $users->password = $this->password;
        $users->email = $this->email;
        $users->roel_id = $this->role_id;
        $users->service_id = $this->service_id;
        $users->save();
        session()->flash('succes','bien modifier');
    }
}
