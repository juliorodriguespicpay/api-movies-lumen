<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes;

class MovieController
{
    public function getAll() {
        return json_decode(Filmes::all());
    }

    public function get($id) {
        return Filmes::query()->findOrFail($id);
    }

    public function create(Request $request) {
        return Filmes::query()->create(
            [
                'titulo' => $request->titulo,
                'lancamento' => $request->lancamento,
                'descricao' => $request->descricao,
                'category_id' => $request->category_id,
            ]
        );
    }

    public function edit($id, Request $request) {
        return Filmes::query()->findOrFail($id)->update(
            [
                'titulo' => $request->titulo,
                'lancamento' => $request->lancamento,
                'descricao' => $request->descricao,
                'category_id' => $request->category_id,
            ]
        );
    }

    public function delete($id, Request $request) {
        return Filmes::query()->findOrFail($id)->delete();
    }

}
