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
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ], [
            'name.required' => 'El campo nombre es requerido.',
            'name.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'email.required' => 'El campo correo electrónico es requerido.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
        ]);

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
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ], [
            'name.required' => 'El campo nombre es requerido.',
            'name.string' => 'El campo nombre debe ser una cadena de caracteres.',
            'email.required' => 'El campo correo electrónico es requerido.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
        ]);

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
