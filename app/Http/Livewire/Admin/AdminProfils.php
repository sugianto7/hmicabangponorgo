<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Profil;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminProfils extends Component
{
    use WithPagination;
    public function render()
    {
        $profile = Profil::latest()->paginate(5);
        return view('livewire.admin.admin-profils',['profile'=>$profile])->layout('layouts.admin');
    }
    public function delete($id)
    {
        if($id){
            Profil::where('id',$id)->delete();
            session()->flash('message', 'gambar komisariat home Deleted Successfully.');
        }
    }

}
