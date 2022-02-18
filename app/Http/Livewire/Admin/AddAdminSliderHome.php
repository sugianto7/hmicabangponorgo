<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sliderhome;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddAdminSliderHome extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $content;
    public $tempat;
    public $image;
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:sliderhomes',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
    }

    public function addSlider()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:sliderhomes',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $sliderhome = new Sliderhome();
        $sliderhome->name = $this->name;
        $sliderhome->slug = $this->slug;
        $sliderhome->description = $this->description;
        $sliderhome->content = $this->content;
        $sliderhome->tempat = $this->tempat;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $sliderhome->image = $imageName;
        $sliderhome->save();
        session()->flash('message','Slider Home has been created Succesfully! 😁');
    }

    public function render()
    {
        return view('livewire.admin.add-admin-slider-home')->layout('layouts.admin');
    }
}