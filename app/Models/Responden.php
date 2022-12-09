<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_responden',
        'kode_pertanyaan',
        'kepuasan',
        'kinerja'
    ];

}
