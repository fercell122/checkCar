<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $table ='carro';
    protected $fillable = ['modelo', 'tipo', 'combustivel', 'ano_fab', 'fabricante', 'cor'];
    

    public function revisoes()

    {
        return $this->hasMany(revisao::class);

    }

    public function User()
    {
        return $this->belongsTo(User::class);
        
    }


}