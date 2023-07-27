<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggotas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nama', 'nim', 'no_hp', 'email', 'id_angkatan'];
}
