<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Categorias extends Model
{
    protected $table = 'categorias';

    public $timestamps = false;

    protected $fillable = [
        'nome',
    ];

}
