<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminGaleri extends Component
{   
    use WithPagination;
    use WithFileUploads;
    public $galeri_id;
    public $name;
    public $tempat;
    public $ket;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $galeries = Galeri::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-galeri',['galeries'=>$galeries])->layout('layouts.admin');
    }

     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'tempat' => 'required',
            'ket' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'tempat' => 'required',
            'ket' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $galeri = new Galeri();
        $galeri->name = $this->name;
        $galeri->tempat = $this->tempat;
        $galeri->ket = $this->ket;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $galeri->image = $imageName;
        $galeri->save();
        session()->flash('message','galeri Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('galeriStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $galeri = Galeri::where('id',$id)->first();
        $this->galeri_id = $galeri->id;
        $this->name = $galeri->name;
        $this->tempat = $galeri->tempat;
        $this->ket = $galeri->ket;
        $this->image = $galeri->image;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'tempat' => 'required',
        ]);
            $galeri = Galeri::find($this->galeri_id);
            $galeri->name = $this->name;
            $galeri->tempat = $this->tempat;
            $galeri->ket = $this->ket;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $galeri->image = $imageName;
            }
            $this->updateMode = false;
            $galeri->save();
            session()->flash('message', 'galeri Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Galeri::where('id',$id)->delete();
            session()->flash('message', 'galeri struktur home Deleted Successfully.');
        }
    }
}
