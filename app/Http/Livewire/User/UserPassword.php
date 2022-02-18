<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class UserPassword extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'password' => 'required|min:8|different:current_password',
            'current_password' => 'required',
        ]);
    }
     public function changePassword()
    {
        $this->validate([
            'password' => 'required|min:8|different:current_password',
            'current_password' => 'required', 

        ]);
        if(Hash::check($this->current_password,Auth::user()->password))
        {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('password_succes', 'Password User Updated Successfully.');
        }else 
            {
            session()->flash('password_error', 'Password doest not match.');
            }
    }      
    public function render()
    {
        return view('livewire.user.user-password')->layout('layouts.base');
    }
}
