<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Priode;
use App\Models\Img;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class AdminPriode extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $priode_id;
    public $kategori_id;
    public $img_id;
    public $name;
    public $image;
    public $newimage;
    public $updateMode = false;
    public function render()
    {
        $priodes = priode::withCount('blog')->paginate(5);
        $imgs = Img::withCount('blog')->paginate(5);
        $categories = Kategori::all();
        return view('livewire.admin.admin-priode',['imgs'=>$imgs,'priodes'=>$priodes,'categories'=>$categories])->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'kategori_id' => 'required',
            'priode_id' => 'required',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'kategori_id' => 'required',
            'priode_id' => 'required',
        ]);
        $priode = new Priode();
        $priode->name = $this->name;
        $priode->save();
        session()->flash('message','priode Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('priodeStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $priode = Priode::where('id',$id)->first();
        $this->priode_id = $priode->id;
        $this->name = $priode->name;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);
            $priode = Priode::find($this->priode_id);
            $priode->name = $this->name;
            $this->updateMode = false;
            $priode->save();
            session()->flash('message', 'priode Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Priode::where('id',$id)->delete();
            session()->flash('message', 'gambar priode home Deleted Successfully.');
        }
    }
    public function addImg()
    {
        $this->validate([
            'kategori_id' => 'required',
            'priode_id' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $gambar = new Img();
        $gambar->priode_id = $this->priode_id;
        $gambar->kategori_id = $this->kategori_id;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $gambar->image = $imageName;
        $gambar->save();
        session()->flash('messages','Images Kepungurusan hmi has been created Succesfully! 😁');
        $this->emit('imgStore'); // Close model to using to jquery

    }
    public function editImg($id)
    {
        $this->updateMode = true;
        $gambar = Img::where('id',$id)->first();
        $this->img_id = $gambar->id;
        $this->kategori_id = $gambar->kategori_id;
        $this->priode_id = $gambar->priode_id;
        $this->image = $gambar->image;
    }
    public function updateImg()
    {
        $this->validate([
            'priode_id' => 'required',
        ]);
            $gambar = Img::find($this->img_id);
            $gambar->kategori_id = $this->kategori_id;
            $gambar->priode_id = $this->priode_id;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $gambar->image = $imageName;
            }
            $this->updateMode = false;
            $gambar->save();
            session()->flash('messages', 'gambar Updated Successfully.');
    }
    public function deleteImg($id)
    {
        if($id){
            Img::where('id',$id)->delete();
            session()->flash('messages', 'gambar gambar home Deleted Successfully.');
        }
    }
}
