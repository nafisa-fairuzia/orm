<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    public function seminar()
    {
        return $this->belongsToMany(Seminar::class, 'mahasiswa_seminar');
    }
            }
