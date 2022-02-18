<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Artikels extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function blog()
    {
        return $this->hasMany(Artikels::class,'kategori_id','id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class,'penulis_id');
    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->isoFormat('dddd, D MMMM Y | HH.s');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }
        // public function user()
        // {
        //     return $this->belongsTo(User::class);
        // }

    public function komentars()
    {
        return $this->morphMany(Komentar::class, 'commentable')->whereNull('parent_id');
    }
}


