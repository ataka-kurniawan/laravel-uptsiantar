<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiRequest extends Model
{
     protected $fillable = [
        'nama', 'nomorhp', 'email', 'rincian'
    ];
}
