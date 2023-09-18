<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    // só grava se os campos do banco de dados estquie setado aqui!!!
    protected $fillable = [
        'name',
        'office'
    ];
}
