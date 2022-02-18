<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Komisariat;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Ketuakom;

class AdminKomisariat extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $komisariat_id;
    public $name;
    public $web;
    public $fb;
    public $wa;
    public $ig;
    public $nama_ketua;
    public $newimage;
    public $image;
    public $updateMode = false;
    public function render()
    {
        $ketuakoms = Ketuakom::withCount('blog')->paginate(5);
        $komisariats = Komisariat::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-komisariat',['komisariats'=>$komisariats,'ketuakoms'=>$ketuakoms])->layout('layouts.admin');
    }
    
     public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $komisariat = new Komisariat();
        $komisariat->name = $this->name;
        $komisariat->web = $this->web;
        $komisariat->ig = $this->ig;
        $komisariat->fb = $this->fb;
        $komisariat->wa = $this->wa;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $komisariat->image = $imageName;
        $komisariat->save();
        session()->flash('message','komisariat Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $komisariat = Komisariat::where('id',$id)->first();
        $this->komisariat_id = $komisariat->id;
        $this->name = $komisariat->name;
        $this->web = $komisariat->web;
        $this->ig = $komisariat->ig;
        $this->fb = $komisariat->fb;
        $this->wa = $komisariat->wa;
        $this->image = $komisariat->image;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'web' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'wa' => 'required',
        ]);
            $komisariat = Komisariat::find($this->komisariat_id);
            $komisariat->name = $this->name;
            $komisariat->web = $this->web;
            $komisariat->ig = $this->ig;
            $komisariat->fb = $this->fb;
            $komisariat->wa = $this->wa;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $komisariat->image = $imageName;
            }
            $this->updateMode = false;
            $komisariat->save();
            session()->flash('message', 'komisariat Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Komisariat::where('id',$id)->delete();
            session()->flash('message', 'gambar komisariat home Deleted Successfully.');
        }
    }
}