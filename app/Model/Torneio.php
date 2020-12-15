<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
    protected $fillable = [
        'id',
        'formato_id',
        'vencedor_id',
        'nome',
        'valor_inscricao',
        'dt_limite_inscricao',
        'dt_inicio',
        'qtd_jogadores',
        'premiacao',
    ];

    protected $guarded = [
        'created_at',
        'update_at'
    ];
}
