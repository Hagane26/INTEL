<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $fillable = ['judul','isi','kadaluarsa'];
    use HasFactory;
}
