<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Hari;
use App\Models\Proker;

class EditAdminProker extends Component
{
    public $proker_id;
    public $proker_name;
    public $hari_id;
    public $name;
    public $description;
    public function render()
    {
        $haris = Hari::all();
        return view('livewire.admin.edit-admin-proker',['haris'=>$haris])->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'hari_id' => 'required',
            'description' => 'required',
        ]);
    }
    
     public function mount($proker_name)
    {
        $proker = Proker::where('name',$proker_name)->first();
        $this->proker_id = $proker->id;
        $this->name = $proker->name;
        $this->hari_id = $proker->hari_id;
        $this->description = $proker->description;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'hari_id' => 'required',
            'description' => 'required',
        ]);
        $proker = Proker::find($this->proker_id);
        $proker->name = $this->name;
        $proker->hari_id = $this->hari_id;
        $proker->description = $this->description;
        $this->updateMode = false;
        $proker->save();
        session()->flash('message', 'proker Updated Successfully.');
    }
}