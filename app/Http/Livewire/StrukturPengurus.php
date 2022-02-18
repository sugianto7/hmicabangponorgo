<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Struktur;
use App\Models\Priode;
use Livewire\WithPagination;
class StrukturPengurus extends Component
{
    public function render()
    {
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $strukturs =Struktur::paginate(8);
        return view('livewire.struktur-pengurus',['strukturs'=>$strukturs,'priode_name'=>$priode_name])->layout('layouts.base');
    }
}

