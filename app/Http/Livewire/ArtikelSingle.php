<?php

namespace App\Http\Livewire;
use App\Models\Post;
use App\Models\User;

use App\Models\Artikels;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ArtikelSingle extends Component
{
    public $slug;
    public $image;

     public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render(Artikel $artikel)
    {
     
        $jml_komentar =Komentar::where('commentable_id','artikel_id')->count();

        $artikel = Artikels::where('slug',$this->slug)->first();
        $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
        $penulis = Penulis::withCount('blog')->get();
            // $kader = Kader::where('image',$this->image)->first();
        $kategori = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get();
            // $singles =Blog::orderBy('description','desc')->simplePaginate(2);
            // $singles =Blog::paginate(5)->onEachSide(2);
            // $terkini_blogs = Blog::inRandomOrder()->limit(2)->get();
        $related_blogs = Artikels::where('kategori_id',$artikel->kategori_id)->inRandomOrder()->limit(3)->get();
        return view('livewire.artikel-single',compact('artikel'),[

            'jml_komentar'=>$jml_komentar,
            'artikel'=>$artikel,
            'penulis'=>$penulis,
            'kategori'=>$kategori,
            'popular_blogs'=>$popular_blogs,
            'related_blogs'=>$related_blogs
        ])->layout('layouts.artikel');
    }
}


    