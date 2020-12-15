<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = [
        'nome',
        'edicao_id',
        'custo',
        'cor',
        'raridade',
        'descricao',
    ];

    protected $guarded = [
        'created_at',
        'update_at'
    ];
}
