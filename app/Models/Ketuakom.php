<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketuakom extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function komisariat()
    {
        return $this->belongsTo(komisariat::class,'komisariat_id');
    }
    public function blog()
    {
        return $this->hasMany(Ketuakom::class,'komisariat_id','id');
    }
}
