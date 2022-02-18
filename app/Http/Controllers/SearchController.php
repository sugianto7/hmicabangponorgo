<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikels;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function autocomplete(Request $req)
    {
        $data = Artikels::select('name')->where("name","LIKE","%{$req->input('query')}%")->get();
        return response()->json($data);
    }
    public function search(Request $req)
    {
        $slug =  Str::slug($req->q,'-');
        if(slug)
        {
            return redirect('/hmi/'.$slug);
        }
        else
        {
            return back();
        }
    }
}