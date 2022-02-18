<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Komentar;
use App\Models\Artikels;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditAdminArtikel extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $penulis_id;
    public $editor;
    public $image;
    public $status;
    public $kategori_id;
    public $newimage;
    public $artikel_id;
    public function mount($artikel_slug)
    {
        $artikel = Artikels::where('slug',$artikel_slug)->first();
        $this->name = $artikel->name;
        $this->slug = $artikel->slug;
        $this->short_description=  $artikel->short_description;
        $this->description = $artikel->description;
        $this->penulis_id = $artikel->penulis_id;
        $this->editor = $artikel->editor;
        $this->status = $artikel->status;
        $this->image=  $artikel->image;
        $this->kategori_id = $artikel->kategori_id;
        $this->artikel_id=  $artikel->id;

    }
    public function generateSlug()
    {
        $this->slug =Str::slug($this->name,'-');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'penulis_id' => 'required',
            'editor' => 'required',
            // 'newimage' => 'required|mimes:jpg,png,jpeg',
            'kategori_id' => 'required'
        ]);
    }
    public function updateBlog()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'penulis_id' => 'required',
            'editor' => 'required',
            // 'newimage' => 'required|mimes:jpg,png',
            'kategori_id' => 'required'
        ]);
        $artikel = Artikels::find($this->artikel_id);
        $artikel->name = $this->name;
        $artikel->slug = $this->slug;
        $artikel->short_description = $this->short_description;
        $artikel->description = $this->description;
        $artikel->status = $this->status;
        $artikel->penulis_id = $this->penulis_id;
        $artikel->editor = $this->editor;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('artikel',$imageName);
            $artikel->image = $imageName;
        }
        
        $artikel->kategori_id = $this->kategori_id;
        $artikel->save();
        session()->flash('message','Edit Berita has been Update Succesfully! 😁');
    }
    public function render()
    {
        $categories =Kategori::all();
        $penulises =Penulis::all();
        return view('livewire.admin.edit-admin-artikel',['categories'=>$categories,'penulises'=>$penulises])->layout('layouts.admin');
    }
}