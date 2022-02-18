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

class AddAdminArtikel extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $koment_id;
    public $penulis_id;
    public $editor;
     public $status;
    public $image;
    public $kategori_id;
    public $created_at;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:artikels',
            'short_description' => 'required',
            'description' => 'required',
            'editor' => 'required',
            'image' => 'required|mimes:jpg,png',
            // 'coment_id' => 'required',
            'penulis_id' => 'required',
            'kategori_id' => 'required'
        ]);
    }

    public function addBlog()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:artikels',
            'short_description' => 'required',
            'description' => 'required',
            'editor' => 'required',
            'image' => 'required|mimes:jpg,png',
            // 'coment_id' => 'required',
            'penulis_id' => 'required',
            'kategori_id' => 'required'
        ]);
        $artikel = new Artikels();
        $artikel->name = $this->name;
        $artikel->slug = $this->slug;
        $artikel->short_description = $this->short_description;
        $artikel->description = $this->description;
        $artikel->editor = $this->editor;
        $artikel->status = $this->status;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $artikel->image = $imageName;
        // $artikel->coment_id = $this->coment_id;
        $artikel->penulis_id = $this->penulis_id;
        $artikel->kategori_id = $this->kategori_id;
        $today =Carbon::now()->isoFormat('dddd, D MMMM Y');
        $artikel->save();
        session()->flash('message','Berita Artikel Dan Opini has been created Succesfully! 😁');
    }
    public function render()
    {
        $categories =Kategori::all();
        $penulises =Penulis::all();
        return view('livewire.admin.add-admin-artikel',['categories'=>$categories,'penulises'=>$penulises])->layout('layouts.admin');
    }
}