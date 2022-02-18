<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Artikels;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Penulis;

class Kategoris extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting="default";
        $this->pagesize= 4;
        $this->category_slug =$category_slug;
    }
    use WithPagination;
    public function render()
    {
        $category = Kategori::where('slug',$this->category_slug)->first();
        $kategori_id =$category->id;
        $kategori_name = $category->name;
        if($this->sorting=='date')
        {
            $artikels = Artikels::latest()->where('kategori_id',$kategori_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="status")
         {
            $artikels = Artikels::latest()->where('kategori_id',$kategori_id)->orderBy('type','ASC')->paginate($this->pagesize);
        }
        else{
            $artikels = Artikels::latest()->where('kategori_id',$kategori_id)->paginate($this->pagesize);
        }
        $penulis = Penulis::withCount('blog')->get();
        $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
        $kategory = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get(); 
        return view('livewire.kategoris',[
            'penulis'=>$penulis,
            'artikels'=>$artikels,
            'kategory'=>$kategory,
            'kategori_name'=>$kategori_name,
            'popular_blogs'=>$popular_blogs,
        ])->layout('layouts.base');
    }
}


