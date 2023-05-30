<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = ['nidn','nama_dosen', 'jenis_k','in_prodi','id_role'];
    use HasFactory;
}
