<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekripsi extends Model
{
    use HasFactory;

    protected $table = 'dekrispi';

    protected $fillable = [
        'plaintext',
        'key',
        'ciphertext',
    ];
}
