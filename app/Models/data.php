<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_responden',
        'kode_pertanyaan',
        'kepuasan',
        'kepentingan'
    ];
}
