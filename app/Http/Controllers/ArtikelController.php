<?php

namespace App\Http\Controllers;
use App\Models\Artikels;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
     public function autocomplete(Request $req)
    {
       $data = Artikels::select('name')->where("name","LIKE","%{$req->input('query')} %")->get();
    }
}
