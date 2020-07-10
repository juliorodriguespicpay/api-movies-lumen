<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Filmes extends Model
{
    public $timestamps = false;

    protected $fillable = ['titulo','descricao', 'lancamento', 'category_id'];

    public function filme () {
        return $this->belongsTo(Categorias::class);
    }

}
