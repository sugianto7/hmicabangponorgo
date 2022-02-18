<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Lapmi;
use App\Models\Img;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminLapmi extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $lapmi_id;
    public $name;
    public $jabatan;
    public $ket;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $penguruse = Img::find([2]);
        $lapmies = Lapmi::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-lapmi',['lapmies'=>$lapmies,'penguruse'=>$penguruse])->layout('layouts.admin');
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
        $lapmi = new lapmi();
        $lapmi->name = $this->name;
        $lapmi->jabatan = $this->jabatan;
        $lapmi->ket = $this->ket;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $lapmi->image = $imageName;
        $lapmi->save();
        session()->flash('message','lapmi Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $lapmi = lapmi::where('id',$id)->first();
        $this->lapmi_id = $lapmi->id;
        $this->name = $lapmi->name;
        $this->jabatan = $lapmi->jabatan;
        $this->ket = $lapmi->ket;
        $this->image = $lapmi->image;
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
            'jabatan' => 'required',
            'ket' => 'required',
          
        ]);
            $lapmi = Lapmi::find($this->lapmi_id);
            $lapmi->name = $this->name;
            $lapmi->jabatan = $this->jabatan;
            $lapmi->ket = $this->ket;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $lapmi->image = $imageName;
            }
            $this->updateMode = false;
            $lapmi->save();
            session()->flash('message', 'lapmi Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            lapmi::where('id',$id)->delete();
            session()->flash('message', 'gambar lapmi home Deleted Successfully.');
        }
    }
}