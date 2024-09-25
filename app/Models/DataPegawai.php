<?php

namespace App\Models;

use App\Models\Siyalem;
use App\Models\DataFoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPegawai extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'pangkat',
        'NRP',
        'jabatan',
        'kesatuan',
        'nopassring',
        'tandajasa',
        'tgl',
        'suku',
        'agama',
        'tinggi',
        'warnakulit',
        'mata',
        'rambut',
        'goldarah',
        'alamatsekarang',
        'ayahalamat',
        'ibualamat',
        'istrialamat',
        'tempatnikah',
        'namaanak',
        'ortuistrialamat',
        'jenis',
    ];

    public function siyalem()
    {
        return $this->belongsTo(Siyalem::class);
    }

    public function datafoto()
    {
        return $this->hasMany(DataFoto::class);
    }
}
