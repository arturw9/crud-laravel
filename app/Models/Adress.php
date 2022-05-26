<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = ['rua', 'numero', 'bairro', 'cidade', 'estado', 'pais', 'cep'];
}
