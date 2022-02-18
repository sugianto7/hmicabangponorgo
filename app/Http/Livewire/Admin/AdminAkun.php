<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAkun extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $user_id;
    public $profile_photo_path;
    public $newimage;
    public $name;
    public $email;

    public $current_password;
    public $password;
    public $password_confirmation;

    public $updateMode = false;
    public function render()
    {
        $users =User::paginate(5);
        return view('livewire.admin.admin-akun',['users'=>$users])->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|different:current_password',
            'current_password' => 'required',
        ]);
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->profile_photo_path = $user->profile_photo_path;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

            $user = User::find($this->user_id);
            $user->name = $this->name;
            $user->email = $this->email;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $user->profile_photo_path = $imageName;
            }
            $this->updateMode = false;
            $user->save();
            session()->flash('message', 'User Updated Successfully.');
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
}

