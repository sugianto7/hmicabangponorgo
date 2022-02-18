<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminete\Support\Str;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function blog()
    {
        return $this->hasMany(artikels::class,'kategori_id','id');
    }
}
