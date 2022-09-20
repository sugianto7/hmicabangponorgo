<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tentang;
use App\Models\Artikels;
use App\Models\Galeri;
use App\Models\Penulis;
use App\Models\Profil;

class ProfilCabang extends Component
{
    public function render()
    {
        $profils = Profil::all();
        $artikels = Artikels::inRandomOrder()->limit(4)->get();
        $galeries = Galeri::inRandomOrder()->limit(4)->get();
        $penulis =Penulis::all();
        return view('livewire.profil-cabang',[
            'profils'=>$profils,
            'artikels'=>$artikels,
            'penulis'=>$penulis,
            'galeries'=>$galeries
        ])->layout('layouts.base');
    }
}

