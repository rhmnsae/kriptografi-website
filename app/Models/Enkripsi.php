<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enkripsi extends Model
{
    use HasFactory;

    protected $table = 'enkripsi';

    protected $fillable = [
        'plaintext',
        'key',
        'ciphertext',
    ];
}
