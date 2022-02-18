<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Penulis;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class AdminPenulis extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $penulis_slug;
    public $penulis_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public $updateMode = false;
    public function render()
    {
            // $penulis = Penulis::all();
        $penulises = Penulis::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-penulis',['penulises'=>$penulises])->layout('layouts.admin');
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
            'image' => 'required|mimes:jpg,png',
        ]);
    }
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:jpg,png',
        ]);
        $Penulis = new Penulis();
        $Penulis->name = $this->name;
        $Penulis->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('artikel',$imageName);
        $Penulis->image = $imageName;
        $Penulis->save();
        session()->flash('message','penulis has been created Succesfully! 😁');
        $this->emit('tentangStore'); // Close model to using to jquery

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $penulis = Penulis::where('id',$id)->first();
        $this->penulis_id = $penulis->id;
        $this->name = $penulis->name;
        $this->slug = $penulis->slug;
        $this->image = $penulis->image;
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
            $penulis = penulis::find($this->penulis_id);
            $penulis->name = $this->name;
            $penulis->slug = $this->slug;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $penulis->image = $imageName;
            }
            $this->updateMode = false;
            $penulis->save();
            session()->flash('message', 'penulis Updated Successfully.');
    }
    
    public function delete($id)
    {
        if($id){
            Penulis::where('id',$id)->delete();
            session()->flash('message', 'penulis Deleted Successfully.');
        }
    }

}

            

