<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Hari;
use App\Models\Proker;
use App\Models\Kegiatan;

class AdminProker extends Component
{
    public $proker_id;
    public $hari_id;
    public $name;
    public $description;
    public $kegiatan_id;
    public $tanggal;
    public $waktu;
    public $tempat;
    public function render()
    {
        $prokers = Proker::withCount('blog')->paginate(5);
        $haris = Hari::all();
        $kegiatan = Kegiatan::latest()->paginate(5);
        return view('livewire.admin.admin-proker',['prokers'=>$prokers,'haris'=>$haris,'kegiatan'=>$kegiatan])->layout('layouts.admin');
    }
     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'hari_id' => 'required',
            'description' => 'required',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'hari_id' => 'required',
            'description' => 'required',
        ]);
        $proker = new Proker();
        $proker->name = $this->name;
        $proker->hari_id = $this->hari_id;
        $proker->description = $this->description;
        $proker->save();
        session()->flash('message','proker has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
   
    public function delete($id)
    {
        if($id){
            Proker::where('id',$id)->delete();
            session()->flash('message', 'proker Deleted Successfully.');
        }
    }
    public function storeK()
    {
        $this->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
        ]);
        $kegiatan = new Kegiatan();
        $kegiatan->name = $this->name;
        $kegiatan->tanggal = $this->tanggal;
        $kegiatan->waktu = $this->waktu;
        $kegiatan->tempat = $this->tempat;
        $kegiatan->save();
        session()->flash('messag','kegiatan has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $kegit = Kegiatan::where('id',$id)->first();
        $this->kegiatan_id = $kegit->id;
        $this->name = $kegit->name;
        $this->tanggal = $kegit->tanggal;
        $this->waktu = $kegit->waktu;
        $this->tempat = $kegit->tempat;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'tanggal' => 'required',
        ]);
            $kegit = Kegiatan::find($this->kegiatan_id);
            $kegit->name = $this->name;
            $kegit->tanggal = $this->tanggal;
            $kegit->waktu = $this->waktu;
            $kegit->tempat = $this->tempat;
            $this->updateMode = false;
            $kegit->save();
            session()->flash('messag', 'penulis Updated Successfully.');
    }
    
    public function deletek($id)
    {
        if($id){
            Kegiatan::where('id',$id)->delete();
            session()->flash('messag', 'penulis Deleted Successfully.');
        }
    }
}