<?php

namespace App\Http\Livewire;

use App\Models\Contac;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class Kontak extends Component
{
    public $name;
    public $subject;
    public $email;
    public $tlp;
    public $pesan;

    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required|unique:contacs',
            'subject' => 'required',
            'email' => 'required',
            'tlp' => 'required',
            'pesan' => 'required',
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required|unique:contacs',
            'subject' => 'required',
            'email' => 'required',
            'tlp' => 'required',
            'pesan' => 'required',
        ]);
        $kontak = new Contac();
        $kontak->name = $this->name;
        $kontak->subject = $this->subject;
        $kontak->email = $this->email;
        $kontak->tlp = $this->tlp;
        $kontak->pesan = $this->pesan;
        $kontak->save();
        session()->flash('message','Berita Kontak Dan Opini has been created Succesfully! 😁');
    }
    public function render()
    {
        $contacs = Contac::find([1]);
        return view('livewire.kontak',['contacs'=>$contacs])->layout('layouts.base');
    }
}
