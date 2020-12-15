<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
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
