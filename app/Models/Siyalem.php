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
        'bangun_kepala',
        'rambut',
        'kening',
        'dahi',
        'hidung',
        'bibir',
        'telinga',
        'urusan_polisi_militer',
    ];
}
