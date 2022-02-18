<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tentang;
use App\Models\Artikels;
use App\Models\Galeri;
use App\Models\Profil;

class ProfilCabang extends Component
{
    public function render()
    {
        $profils = Profil::all();
        $artikels = Artikels::inRandomOrder()->limit(4)->get();
        $galeries = Galeri::inRandomOrder()->limit(4)->get();
        return view('livewire.profil-cabang',[
            'profils'=>$profils,
            'artikels'=>$artikels,
            'galeries'=>$galeries]
        )->layout('layouts.base');
    }
}

