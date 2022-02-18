<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Artikels;
use App\Models\Struktur;
use App\Models\Bpl;
use App\Models\Lapmi;
use App\Models\Kohati;
use App\Models\User;
use App\Models\Komisariat;

class AdminDashboard extends Component
{
    public function render()
    {
        $bpl = Bpl::all()->count();
        $lapmi = lapmi::all()->count();
        $kohati = Kohati::all()->count();
        $user = User::all()->count();
        $user = User::all()->count();
        $sp = Struktur::all()->count();
        $komisariat = Komisariat::all()->count();
        $penulis = Penulis::all()->count();
        $artikels = Artikels::all()->count();
        $artikel = Artikels::where('image')->first();
        return view('livewire.admin.admin-dashboard',[
            'bpl'=>$bpl,
            'lapmi'=>$lapmi,
            'kohati'=>$kohati,
            'user'=>$user,
            'sp'=>$sp,
            'komisariat'=>$komisariat,
            'penulis'=>$penulis,
            'artikel'=>$artikel,
            'artikels'=>$artikels
        ])->layout('layouts.admin');
    }
}
