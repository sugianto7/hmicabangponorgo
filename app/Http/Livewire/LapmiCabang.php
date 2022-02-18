<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lapmi;
use App\Models\Img;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Priode;

class LapmiCabang extends Component
{
    
    public function render()
    {
        
        $imgs =Img::find([2]);
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $kategoris = Kategori::find([2]);
        $lapmies = Lapmi::withCount('blog')->paginate(3);
        return view('livewire.lapmi-cabang',[
            'imgs'=>$imgs,
            'lapmies'=>$lapmies,
            'kategoris'=>$kategoris,
            'priode_name'=>$priode_name]
        )->layout('layouts.base');
    }
}
