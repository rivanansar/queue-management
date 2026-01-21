<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    'nama_proyek',
    'nama_alat',
    'tipe_layanan',
    'status'
];
}


