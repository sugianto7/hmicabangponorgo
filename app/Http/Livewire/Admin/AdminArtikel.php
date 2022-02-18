<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Artikels;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class AdminArtikel extends Component
{
    use WithPagination;
    public function render()
    {
        $artikels = Artikels::latest()->paginate(5);
            // $artikels = Artikels::latest()->get();
        return view('livewire.admin.admin-artikel',['artikels'=>$artikels])->layout('layouts.admin');
    }
    public function delete($id)
    {
        if($id){
            Artikels::where('id',$id)->delete();
            session()->flash('message', 'Berita Deleted Successfully.');
        }
    }
}


    // public function deletePenulis($id)
    //     {
    //         $penulis = Penulis::find($id);
    //         $penulis->delete();
    //         session()->flash('message','Penulis Pena Kader telah di hapus dengan Succesfully! 😁');
    //     }