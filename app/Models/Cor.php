<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    use HasFactory;

    protected $table = 'cors';

    protected $fillable = ['Saw', 'EB', 'M9G','R2T','W9A','WR7','SE8'];

}
