<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'valor',
        'taxa_performance',
        'qtd_nivel',
    ];
}
