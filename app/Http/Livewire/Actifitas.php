<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hari;
use App\Models\Proker;
use App\Models\Kegiatan;
use App\Models\Artikels;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Komentar;
use App\Models\Ketuakom;
use App\Models\Komisariat;
use App\Models\Galeri;

use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Actifitas extends Component
{
    public $slug;
    public $image;

     public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $jml_komentar =Komentar::where('commentable_id','artikel_id')->count();
           
        $penulis = Penulis::withCount('blog')->get();            
        
        $kategori = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get();
        $ketuakoms =Ketuakom::all();
        $galeries = Galeri::all();
        $komisariats = Komisariat::all();
        $top_news = Artikels::inRandomOrder()->limit(5)->get();
        $baca_juga = Artikels::inRandomOrder()->limit(4)->get();
        $kategory = Kategori::withCount('blog')->get();
        $latest_news = Artikels::latest()->paginate(6);
        $popular_news = Artikels::inRandomOrder()->limit(4)->get();

        $prokers = Proker::withCount('blog')->paginate(5);
        $haris = Hari::all();
        $kegiatan = Kegiatan::where('slug',$this->slug)->first();
        return view('livewire.actifitas',[
            'prokers'=>$prokers,
            'haris'=>$haris,
            'kegiatan'=>$kegiatan,

             'jml_komentar'=>$jml_komentar,
  
            'penulis'=>$penulis,
            'kategori'=>$kategori,
            // 'popular_blogs'=>$popular_blogs,
            'kategory'=>$kategory,
            'top_news'=>$top_news,
            'baca_juga'=>$baca_juga,
            'ketuakoms'=>$ketuakoms,
            'komisariats'=>$komisariats,
            'galeries'=>$galeries,
            'latest_news'=>$latest_news,
            'popular_news'=>$popular_news,
        ])->layout('layouts.berita');
    }
}
