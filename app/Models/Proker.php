<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function blog()
    {
        return $this->hasMany(Proker::class,'hari_id','id');
    }
    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }
}
