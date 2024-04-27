<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManageUsers extends Component
{
    public $user_id, $name, $last_name, $email, $phone, $active, $password;

    public function render()
    {
        return view('livewire.manage-users');
    }

    public function mount()
    {
        $this->users = User::all();
        // $this->users = User::where('active', true)->get();
    }


    public function createUser()
    {
        // $this->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email|unique:users,email',
        // ]);

        User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'active' => 1,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'user_id', 'last_name', 'phone', 'active', 'password']);
        $this->mount(); // Recargar la lista de usuarios
    }

    public function editUser($id)
    {
        $user = User::find($id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->active = $user->active;
    }

    public function updateUser()
    {
        // dd($this->user_id, $this->name, $this->last_name, $this->email, $this->phone, $this->active);
        // $this->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email|unique:users,email,' . $this->user_id,
        // ]);

        $user = User::find($this->user_id);
        $user->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'active' => false,
        ]);

        $this->reset(['name', 'email', 'user_id', 'last_name', 'phone', 'active']);
        $this->mount(); // Recargar la lista de usuarios
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        $this->mount(); // Recargar la lista de usuarios
    }

    
}
