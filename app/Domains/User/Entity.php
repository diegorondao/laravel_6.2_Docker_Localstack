<?php

namespace App\Domains\User;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entity extends Authenticatable implements JWTSubject
{
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'clientes_id',
        'nome',
        'email',
        'senha',
        'imagem_avatar',
        'usuario_tipo',
        'cadastrar_clientes',
        'cadastrar_obras',
        'bloqueio',
        'perfil_permissoes_id',
        'recebe_alerta_avaliar_aprovacao',
        'recebe_alerta_status_selecionado_aprovacao',
        'recebe_alerta_selecao_responsavel_resposta',
        'recebe_alerta_atraso_responsavel_resposta',
        'recebe_alerta_finalizacao_formulario',
        'recebe_alertas_unificados',
        'externo_id'
    ];
}
