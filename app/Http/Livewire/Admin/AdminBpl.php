<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Bpl;
use App\Models\Img;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminBpl extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $bpl_id;
    public $name;
    public $jabatan;
    public $ket;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $penguruse = Img::find([3]);
        $bpls = Bpl::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-bpl',['bpls'=>$bpls,'penguruse'=>$penguruse])->layout('layouts.admin');
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
        $bpl = new Bpl();
        $bpl->name = $this->name;
        $bpl->jabatan = $this->jabatan;
        $bpl->ket = $this->ket;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $bpl->image = $imageName;
        $bpl->save();
        session()->flash('message','bpl Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $bpl = Bpl::where('id',$id)->first();
        $this->bpl_id = $bpl->id;
        $this->name = $bpl->name;
        $this->jabatan = $bpl->jabatan;
        $this->ket = $bpl->ket;
        $this->image = $bpl->image;
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
            $bpl = Bpl::find($this->bpl_id);
            $bpl->name = $this->name;
            $bpl->jabatan = $this->jabatan;
            $bpl->ket = $this->ket;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $bpl->image = $imageName;
            }
            $this->updateMode = false;
            $bpl->save();
            session()->flash('message', 'bpl Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Bpl::where('id',$id)->delete();
            session()->flash('message', 'gambar bpl home Deleted Successfully.');
        }
    }
}
