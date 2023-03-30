<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siyalem extends Model
{
    use HasFactory;

    protected $fillable=[
        'lembaga',
        'sikap',
        'langkah',
        'bangun kepala',
        'rambut',
        'kening',
        'dahi',
        'hidung',
        'bibir',
        'telinga',
        'urusan polisi militer',
    ];
}
