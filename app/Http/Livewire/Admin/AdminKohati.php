<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kohati;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Img;

class AdminKohati extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $kohati_id;
    public $name;
    public $jabatan;
    public $ket;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $penguruse = Img::find([1]);
        $kohatis = Kohati::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-kohati',['kohatis'=>$kohatis,'penguruse'=>$penguruse])->layout('layouts.admin');
    }
    
     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
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
        $Kohati = new Kohati();
        $Kohati->name = $this->name;
        $Kohati->jabatan = $this->jabatan;
        $Kohati->ket = $this->ket;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $Kohati->image = $imageName;
        $Kohati->save();
        session()->flash('message','Kohati Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $kohati = Kohati::where('id',$id)->first();
        $this->kohati_id = $kohati->id;
        $this->name = $kohati->name;
        $this->jabatan = $kohati->jabatan;
        $this->ket = $kohati->ket;
        $this->image = $kohati->image;
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
            $kohati = Kohati::find($this->kohati_id);
            $kohati->name = $this->name;
            $kohati->jabatan = $this->jabatan;
            $kohati->ket = $this->ket;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $kohati->image = $imageName;
            }
            $this->updateMode = false;
            $kohati->save();
            session()->flash('message', 'kohati Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Kohati::where('id',$id)->delete();
            session()->flash('message', 'gambar kohati home Deleted Successfully.');
        }
    }
}
