<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = "penulis";

    public function buku()
    {
     return $this->hasOne(Buku::class);
    }
 
}
