<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Struktur;
use App\Models\Img;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminStruktKepengurusan extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $struktur_id;
    public $name;
    public $jabatan;
    public $ket;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $pengurus = Struktur::withCount('blog')->paginate(5);
        $penguruse = Img::find([4]);
        return view('livewire.admin.admin-strukt-kepengurusan',['pengurus'=>$pengurus,'penguruse'=>$penguruse])->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'jabatan' => 'required',
            'jabatan' => 'required',
            'ket' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'ket' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $struktur = new Struktur();
        $struktur->name = $this->name;
        $struktur->jabatan = $this->jabatan;
        $struktur->ket = $this->ket;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $struktur->image = $imageName;
        $struktur->save();
        session()->flash('message','Struktur Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('strukturStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $struktur = Struktur::where('id',$id)->first();
        $this->struktur_id = $struktur->id;
        $this->name = $struktur->name;
        $this->jabatan = $struktur->jabatan;
        $this->ket = $struktur->ket;
        $this->image = $struktur->image;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'ket' => 'required',
        ]);
            $struktur = Struktur::find($this->struktur_id);
            $struktur->name = $this->name;
            $struktur->jabatan = $this->jabatan;
            $struktur->ket = $this->ket;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $struktur->image = $imageName;
            }
            $this->updateMode = false;
            $struktur->save();
            session()->flash('message', 'struktur Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Struktur::where('id',$id)->delete();
            session()->flash('message', 'gambar struktur home Deleted Successfully.');
        }
    }
    
}