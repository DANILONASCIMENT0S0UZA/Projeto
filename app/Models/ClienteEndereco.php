<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\{
    Cliente,
    Endereco
};

class ClienteEndereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes_endereco';
    protected $primarykey = 'id_cliente_endereco';
    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
            'id_cliente',
            'id_endereco',
            'preco',
            'observacoes',
    ];

    /**
     * --------------------------------------
     * RELACIONAMENTOS
     * --------------------------------------
     */

    public function cliente():object{
        return $this->belongsTo(Cliente::class,
                                'id_cliente',
                                'id_cliente');
     }
    public function endereco():object{
        return $this->belongsTo(Endereco::class,
                                'id_endereco',
                                'id_endereco');
     }
}