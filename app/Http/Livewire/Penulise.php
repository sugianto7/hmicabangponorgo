<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Artikels;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Penulis;


class Penulise extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $penulis_slug;

    public function mount($penulis_slug)
    {
        $this->sorting="default";
        $this->pagesize= 4;
        $this->penulis_slug =$penulis_slug;
    }

    public function render()
    {
        $penulis = Penulis::where('slug',$this->penulis_slug)->first();
        $penulis_id =$penulis->id;
        $penulis_name = $penulis->name;
        if($this->sorting=='date')
        {
            $artikels = Artikels::latest()->where('penulis_id',$penulis_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="status")
         {
            $artikels = Artikels::latest()->where('penulis_id',$penulis_id)->orderBy('type','ASC')->paginate($this->pagesize);
        }
        else{
            $artikels = Artikels::latest()->where('penulis_id',$penulis_id)->paginate($this->pagesize);
        }
        $penuliss = Penulis::withCount('blog')->get();
        $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
        $kategory = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get(); 
        return view('livewire.penulis',[
            'penuliss'=>$penuliss,
            'artikels'=>$artikels,
            'kategory'=>$kategory,
            'penulis_name'=>$penulis_name,
            'popular_blogs'=>$popular_blogs])->layout('layouts.base');
    }
}
  