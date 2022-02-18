<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Profil;

class AddAdminProfils extends Component
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
    public function render()
    {
        return view('livewire.admin.add-admin-profils')->layout('layouts.admin');
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
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $prfl = new Profil();
        $prfl->name = $this->name;
        $prfl->web = $this->web;
        $prfl->ig = $this->ig;
        $prfl->fb = $this->fb;
        $prfl->wa = $this->wa;
        $prfl->description = $this->description;
        $prfl->short_description = $this->short_description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $prfl->image = $imageName;
        $prfl->save();
        session()->flash('message','Profil HMI has been created Succesfully! 😁');

    }

}
