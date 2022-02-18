<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Priode;

class GaleriKegiatan extends Component
{
    public function render()
    {
         // $popular_kaders = Kader::orderBy('id','asc')->take(8)->get();
        $gleris = Galeri::orderBy('id','asc')->offset(5)->limit(30)->get();
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $kategori = Kategori::find([2]);
        $galeries = Galeri::all();
        return view('livewire.galeri-kegiatan',['galeries'=>$galeries,'gleris'=>$gleris,'kategori'=>$kategori,'priode_name'=>$priode_name])->layout('layouts.base');
    }
}