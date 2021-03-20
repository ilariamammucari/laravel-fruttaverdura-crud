<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $fillable = [
        'nome', 'peso', 'stagione', 'prezzo'
    ];
}
