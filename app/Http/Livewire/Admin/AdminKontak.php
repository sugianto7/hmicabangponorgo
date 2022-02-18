<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contac;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminKontak extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $kontak_id;
    public $name;
    public $tlp;
    public $pesan;
    public $subject;
    public $email;
    public $image;
    public $alamat;
    public $newimage;
    public $updateMode = false;
    public function render()
    {
        $contacs = Contac::find([1]);
        $kontaks = Contac::latest()->withCount('blog')->paginate(5);

        return view('livewire.admin.admin-kontak',['kontaks'=>$kontaks,'contacs'=>$contacs])->layout('layouts.admin');
    }
    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'tlp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        
        ]);
    }
    public function show() {

        $this->updateMode = true;
        $kontak = Contac::where('id',$id)->first();
        $this->kontak_id = $kontak->id;
        $this->name = $kontak->name;
        $this->tlp = $kontak->tlp;
        $this->email = $kontak->email;
        $this->alamat = $kontak->alamat;
        $this->image = $kontak->image;

    }
    public function edit($id)
    {
        $this->updateMode = true;
        $kontak = Contac::where('id',$id)->first();
        $this->kontak_id = $kontak->id;
        $this->name = $kontak->name;
        $this->tlp = $kontak->tlp;
        $this->email = $kontak->email;
        $this->alamat = $kontak->alamat;
        $this->image = $kontak->image;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'tlp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
    
        ]);
        $kontak = Contac::find($this->kontak_id);
        $kontak->name = $this->name;
        $kontak->tlp = $this->tlp;
        $kontak->email = $this->email;
        $kontak->alamat = $this->alamat;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('artikel',$imageName);
            $kontak->image = $imageName;
        }
        $this->updateMode = false;
        $kontak->save();
        session()->flash('message-kontak', 'kontak Updated Successfully.');
    }
    
    public function delete($id)
    {
        if($id){
            Contac::where('id',$id)->delete();
            session()->flash('message-kontak', 'kontak Deleted Successfully.');
        }
    }
}
