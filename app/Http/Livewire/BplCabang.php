<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bpl;
use App\Models\Img;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Priode;

class BplCabang extends Component
{
    public function render()
    {
        $imgs =Img::find([3]);
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $kategoris = Kategori::find([3]);
        $bpls = Bpl::withCount('blog')->paginate(3);
        return view('livewire.bpl-cabang',['imgs'=>$imgs,'bpls'=>$bpls,'kategoris'=>$kategoris,'priode_name'=>$priode_name])->layout('layouts.base');
    }
}
