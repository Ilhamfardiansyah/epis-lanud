<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataFoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'siyalem_id',
        'ket_pic',
        'depan_pic',
        'kanan_pic',
        'kiri_pic',
        'sidik_pic',
    ];

    public function siyalems()
    {
        return $this->hasOne(Siyalem::class);
    }
}
