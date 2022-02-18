<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;

class Layout extends Component
{
    public function render()
    {
        $kategoris = Kategori::withCount('blog')->paginate(5);
        return view('layouts.admin',['name'=>'kategoris'])->layout('layouts.artikel');
    }
}
