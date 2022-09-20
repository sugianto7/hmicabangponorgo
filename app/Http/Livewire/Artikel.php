<?php

namespace App\Http\Livewire;
use App\Models\Sliderhome;
use App\Models\Artikels;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Ketuakom;
use App\Models\Komisariat;
use App\Models\Galeri;
use Illuminate\Http\Request;
class Artikel extends Component
{
    public function render()
    {
        $sliderhome = Sliderhome::all();
        $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
        $top_news = Artikels::inRandomOrder()->limit(5)->get();
        $baca_juga = Artikels::inRandomOrder()->limit(4)->get();
        $artikelses = Artikels::latest()->paginate(4);
        $penulis = Penulis::withCount('blog')->get();
        $kategory = Kategori::withCount('blog')->get();
        $ketuakoms =Ketuakom::all();
        $galeries = Galeri::all();
        $komisariats = Komisariat::all();
        return view('livewire.artikel',[
            'sliderhome'=>$sliderhome,
            'penulis'=>$penulis,
            'artikelses'=>$artikelses,
            'kategory'=>$kategory,
            'top_news'=>$top_news,
            'baca_juga'=>$baca_juga,
            'ketuakoms'=>$ketuakoms,
            'komisariats'=>$komisariats,
            'galeries'=>$galeries,
            'popular_blogs'=>$popular_blogs
        ])->layout('layouts.berita');
    }
}
