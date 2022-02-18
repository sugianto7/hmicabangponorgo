<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Komisariat;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Ketuakom;

class AdminKetumKom extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $ketuakom_id;
    public $komisariat_id;
    public $name;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $ketuakoms = Ketuakom::withCount('blog')->paginate(5);
        $komisariats = Komisariat::all();
        return view('livewire.admin.admin-ketum-kom',['komisariats'=>$komisariats,'ketuakoms'=>$ketuakoms])->layout('layouts.admin');
    }
     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'image' => 'required|mimes:jpg,png',
            'komisariat_id' => 'required',
        ]);
    }
    public function cancel()
    {
        $this->updateMode = false;

    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'komisariat_id' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $ketuakom = new Ketuakom();
        $ketuakom->name = $this->name;
        $ketuakom->komisariat_id = $this->komisariat_id;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $ketuakom->image = $imageName;
        $ketuakom->save();
        session()->flash('message','ketuakom Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $ketuakom = Ketuakom::where('id',$id)->first();
        $this->komisariat_id = $ketuakom->id;
        $this->name = $ketuakom->name;
        $this->web = $ketuakom->web;
        $this->ig = $ketuakom->ig;
        $this->fb = $ketuakom->fb;
        $this->wa = $ketuakom->wa;
        $this->image = $ketuakom->image;
        $this->komisariat_id = $ketuakom->komisariat_id;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'komisariat_id' => 'required',
        ]);
            $ketuakom = Ketuakom::find($this->komisariat_id);
            $ketuakom->name = $this->name;
            $ketuakom->komisariat_id = $this->komisariat_id;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $ketuakom->image = $imageName;
            }
            $this->updateMode = false;
            $ketuakom->save();
            session()->flash('message', 'ketuakom Updated Successfully.');
    }
    public function deleteK($id)
    {
        if($id){
            Ketuakom::where('id',$id)->delete();
            session()->flash('message', 'gambar Ketua Komisariat home Deleted Successfully.');
        }
    }
}
