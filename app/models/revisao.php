<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class revisao extends Model
{
    protected $table ='revisoes';
    protected $fillable = ['km', 'funcEletrica', 'funcMecanica', 'condFuncionamento', 'condPneu', 'obsGeral'];

    
    public function carro()

    {
        return $this->belongsTo(carro::class);

    }


}