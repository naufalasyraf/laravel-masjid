<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumat extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function imam()
    {
        return $this->belongsTo(imam::class);
    }

    public function muadzin()
    {
        return $this->belongsTo(muadzin::class);
    }

    public function pengurus()
    {
        return $this->belongsTo(pengurus::class);
    }
}
