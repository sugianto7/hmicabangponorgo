<?php

namespace App\Http\Livewire;

use App\Models\Artikels;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;
class Artikel extends Component
{
    public function render()
    {
        $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
        $artikelses = Artikels::latest()->paginate(6);
        $penulis = Penulis::withCount('blog')->get();
        $kategory = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get();
        return view('livewire.artikel',[
            'penulis'=>$penulis,
            'artikelses'=>$artikelses,
            'kategory'=>$kategory,
            'popular_blogs'=>$popular_blogs
        ])->layout('layouts.base');
    }
}
