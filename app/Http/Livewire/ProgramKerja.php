<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proker;
use App\Models\Priode;

class ProgramKerja extends Component
{
    public function render()
    {
        $priode_name = Priode::orderBy('id', 'desc')->take(1)->get();
        $prokers = Proker::all();
        return view('livewire.program-kerja',['priode_name'=>$priode_name,'prokers'=>$prokers])->layout('layouts.base');
    }
}
