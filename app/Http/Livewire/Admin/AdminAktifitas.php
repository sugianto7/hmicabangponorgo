<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAktifitas extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-aktifitas')->layout('layouts.admin');
    }
}
