<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_nome',
        'bc_batch',
        'vin',
        'model',
        'part',
        'result_15',
        'result_25',
        'result_45',
        'result_75',
        'result_110',
    ];

}


