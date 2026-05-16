<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // Beritahu Laravel bahwa model ini memakai tabel 'campaigns'
    protected $table = 'campaigns';

    // Kolom-kolom yang boleh diisi di database
    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'kategori',
        'kondisi',
        'kontak_pemilik'
    ];
}