<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
   use HasFactory;

    protected $table = 'partes';

    protected $fillable = ['Fender Left', 'Fender Right', 'Qtr Panel Left','Qtr Panel Right'];

}
