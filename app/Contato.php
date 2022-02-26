<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'telefone', 'usuario_gh','user_id'
    ];
    
    public function contatos()
    {
        //return $this->belongsTo(User::class);
    }
}
