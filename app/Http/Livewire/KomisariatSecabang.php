<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Komisariat;
use App\Models\Priode;
use App\Models\Ketuakom;

class KomisariatSecabang extends Component
{
    public function render()
    {
        $ketuakoms =Ketuakom::all();
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $komisariats = Komisariat::all();
        return view('livewire.komisariat-secabang',['ketuakoms'=>$ketuakoms,'komisariats'=>$komisariats])->layout('layouts.base');
    }
}