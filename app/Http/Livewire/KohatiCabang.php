<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kohati;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Priode;
use App\Models\Img;

class KohatiCabang extends Component
{
    public function render()
    {
        $imgs =Img::find([1]);
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $kategoris = Kategori::find([1]);
        $kohatis = Kohati::withCount('blog')->paginate(3);
        return view('livewire.kohati-cabang',['imgs'=>$imgs,'kohatis'=>$kohatis,'kategoris'=>$kategoris,'priode_name'=>$priode_name])->layout('layouts.base');
    }
}

