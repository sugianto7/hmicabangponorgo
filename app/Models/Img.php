<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function blog()
    {
        return $this->hasMany(Img::class,'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
    public function priode()
    {
        return $this->belongsTo(Priode::class,'priode_id');
    }
}
