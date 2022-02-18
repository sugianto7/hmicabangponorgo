<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Struktur;
use App\Models\Priode;
use App\Models\Img;
use App\Models\Sliderhome;
use Livewire\WithPagination;

class PengrusDetail extends Component
{
    public function render()
    {
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $strukturs =Struktur::paginate(4);
        $imgs =Img::find([4]);
        $imges =Sliderhome::orderBy('image', 'desc')->take(2)->get();
        return view('livewire.pengrus-detail',['imgs'=>$imgs,'imges'=>$imges,'strukturs'=>$strukturs,'priode_name'=>$priode_name])->layout('layouts.base');
    }
}