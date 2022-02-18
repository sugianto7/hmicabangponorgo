<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tentang;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminTentangHome extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $tentang_id;
    public $name;
    public $slug;
    public $nama_ketua;
    public $short_description;
    public $content;
    public $image;
    public $judul;
    public $newimage;
    public $updateMode = false;
    public function render()
    {
        $tentangs= Tentang::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-tentang-home',['tentangs'=> $tentangs])->layout('layouts.admin');
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'judul' => 'required',
            'nama_ketua' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'judul' => 'required',
            'nama_ketua' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $tentang = new Tentang();
        $tentang->name = $this->name;
        $tentang->slug = $this->slug;
        $tentang->nama_ketua = $this->nama_ketua;
        $tentang->short_description = $this->short_description;
        $tentang->content = $this->content;
        $tentang->judul = $this->judul;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $tentang->image = $imageName;
        $tentang->save();
        session()->flash('message','Berita Artikel Dan Opini has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $tentang = Tentang::where('id',$id)->first();
        $this->tentang_id = $tentang->id;
        $this->name = $tentang->name;
        $this->slug = $tentang->slug;
        $this->judul = $tentang->judul;
        $this->nama_ketua = $tentang->nama_ketua;
        $this->content = $tentang->content;
        $this->short_description = $tentang->short_description;
        $this->image = $tentang->image;
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'judul' => 'required',
            'nama_ketua' => 'required',
        ]);
            $tentang = Tentang::find($this->tentang_id);
            $tentang->name = $this->name;
            $tentang->slug = $this->slug;
            $tentang->short_description = $this->short_description;
            $tentang->content = $this->content;
            $tentang->nama_ketua = $this->nama_ketua;
            $tentang->judul = $this->judul;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $tentang->image = $imageName;
            }
            $this->updateMode = false;
            $tentang->save();
            session()->flash('message', 'Tentang Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Tentang::where('id',$id)->delete();
            session()->flash('message', 'gambar Tentang home Deleted Successfully.');
        }
    }
}
