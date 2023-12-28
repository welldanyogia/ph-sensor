<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ph extends Model
{
    use HasFactory;

    protected $table = 'tb_ph';
    protected $fillable = [
        'ph',
        'voltage',
        'sifat',
    ];
}
