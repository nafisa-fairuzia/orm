<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
   protected $table = "buku";

   public function penulis()
   {
    return $this->belongsTo(Penulis::class);
   }
}
