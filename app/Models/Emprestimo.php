<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    public function clientes() {
        return $this->hasOne(Cliente::class, 'id','id_cliente');
    }
}
