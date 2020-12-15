<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Edicao extends Model
{
    protected $fillable = [
        'nome',
        'formato_id',
    ];

    protected $guarded = [
        'created_at',
        'update_at'
    ];
}
