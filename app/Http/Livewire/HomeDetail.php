<?php

namespace App\Http\Livewire;

namespace App\Http\Livewire;
use App\Models\Sliderhome;

use Livewire\WithPagination;
use Illuminate\Http\Request;
use Livewire\Component;

class HomeDetail extends Component
{
    public $slug;
    public $image;

     public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $sliderhome = Sliderhome::all();
        $sliderhomes = Sliderhome::where('slug',$this->slug)->first();
        return view('livewire.home-detail',['sliderhomes'=>$sliderhomes,'sliderhome'=>$sliderhome])->layout('layouts.base');
    }
}

    