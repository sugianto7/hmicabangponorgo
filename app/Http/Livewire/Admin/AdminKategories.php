<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminKategories extends Component
{
    use WithPagination;
    public $kategori_id;
    public $name;
    public $slug;
    public $updateMode = false;
    public function render()
    {
        $kategoris = Kategori::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-kategories',['kategoris'=>$kategoris])->layout('layouts.admin');
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
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $kategori = new Kategori();
        $kategori->name = $this->name;
        $kategori->slug = $this->slug;
        $kategori->save();
        session()->flash('message','Kategori has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $kategori = Kategori::where('id',$id)->first();
        $this->kategori_id = $kategori->id;
        $this->name = $kategori->name;
        $this->slug = $kategori->slug;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
            $kategori = Kategori::find($this->kategori_id);
            $kategori->name = $this->name;
            $kategori->slug = $this->slug;
            $this->updateMode = false;
            $kategori->save();
            session()->flash('message', 'Kategori Updated Successfully.');
    }
    
    public function delete($id)
    {
        if($id){
            Kategori::where('id',$id)->delete();
            session()->flash('message', 'Kategori Deleted Successfully.');
        }
    }

}
