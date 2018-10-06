<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    protected $fillable = ['film_name','kategori'];




    public function user()
    {
        return $this->belongsTo(User::class);
    }


    
}
