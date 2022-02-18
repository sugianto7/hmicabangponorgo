<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Artikels;
use App\Models\Struktur;
use App\Models\Sliderhome;
use App\Models\Tentang;
use App\Models\Priode;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class Home extends Component
{
    public function render()
    {
        $kegiatan = Kegiatan::latest()->paginate(6);
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $strukturs = Struktur::all();
        $tentangs = Tentang::all();
        $sliderhome = Sliderhome::all();
        $artikels = Artikels::inRandomOrder()->limit(3)->get();  
        $kategory = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get();
        return view('livewire.home',[
        'kegiatan'=>$kegiatan,
        'priode_name'=>$priode_name,
        'strukturs'=>$strukturs,
        'tentangs'=>$tentangs,
        'sliderhome'=>$sliderhome,
        'artikels'=>$artikels,
        'kategory'=>$kategory,
        ])->layout('layouts.base');
    }
}
