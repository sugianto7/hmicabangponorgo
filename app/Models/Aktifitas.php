<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->isoFormat('ddd, D MMM Y');
    }
    // dddd, D MMMM Y
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->isoFormat('dddd, D MMMM Y | H.s');
    }
}
