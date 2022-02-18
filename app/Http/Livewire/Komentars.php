<?php

namespace App\Http\Livewire;

use App\Models\Artikels;
use App\Models\Komentar;
use Livewire\Component;
use Illuminate\Http\Request;

class Komentars extends Component
{

    public function store(Request $request)
    {
        $komentar = new Komentar;

        $komentar->komentar = $request->komentar;

        $komentar->user()->associate($request->user());

        $artikel = Artikels::find($request->artikel_id);

        $artikel->komentars()->save($komentar);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Komentar();

        $reply->komentar = $request->get('komentar');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('komentar_id');

        $artikel = Artikels::find($request->get('artikel_id'));

        $artikel->komentars()->save($reply);

        return back();

    }
}
