<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tentang;
class TentangCabang extends Component
{
    public function render()
    {
        $tentangs = Tentang::all();
        
        return view('livewire.tentang-cabang',['tentangs'=>$tentangs])->layout('layouts.base');
    }
}
