<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Profil;

class EditAdminProfils extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $profil_id;
    public $name;
    public $web;
    public $fb;
    public $wa;
    public $ig;
    public $short_description;
    public $description;
    public $image;
    public $newimage;
    public function render()
    {
        return view('livewire.admin.edit-admin-profils')->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            
        ]);
    }
    public function mount($profil_id)
    {
        $profil = Profil::where('id',$profil_id)->first();
        $this->profil_id = $profil->id;
        $this->name = $profil->name;
        $this->web = $profil->web;
        $this->ig = $profil->ig;
        $this->fb = $profil->fb;
        $this->wa = $profil->wa;
        $this->image = $profil->image;
        $this->short_description = $profil->short_description;
        $this->description = $profil->description;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'description' => 'required',
            'short_description' => 'required',

        ]);
        $prfl = Profil::find($this->profil_id);
        $prfl->name = $this->name;
        $prfl->web = $this->web;
        $prfl->ig = $this->ig;
        $prfl->fb = $this->fb;
        $prfl->wa = $this->wa;
        $prfl->description = $this->description;
        $prfl->short_description = $this->short_description;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('artikel',$imageName);
            $prfl->image = $imageName;
        }
        $prfl->save();
        session()->flash('message','Profil HMI has been created Succesfully! 😁');

    }
}
    