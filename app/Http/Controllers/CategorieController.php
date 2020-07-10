<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategorieController extends Controller {

    public function getAll() {
        return json_decode(Categorias::all());
    }

    public function get($id) {
        return Categorias::query()->findOrFail($id);
    }

    public function create(Request $request) {
        return Categorias::query()->create(['nome' => $request->nome]);
    }

    public function edit($id, Request $request) {
        return Categorias::query()->findOrFail($id)->update(['nome' => $request->nome]);
    }

    public function delete($id, Request $request) {
        return Categorias::query()->findOrFail($id)->delete();
    }

}
