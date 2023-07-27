<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'deskripsi', 'image', 'id_kategori', 'jadwal', 'tempat'];
}
