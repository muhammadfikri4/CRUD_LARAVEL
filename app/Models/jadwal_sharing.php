<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_sharing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'deskripsi', 'id_kategori', 'jadwal_sharing', 'image'];
}
