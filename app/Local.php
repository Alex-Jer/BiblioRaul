<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    protected $fillable = ['nome', 'capacidade'];

    public function atividades()
    {
        return $this->hasMany(Atividade::class);
    }
}