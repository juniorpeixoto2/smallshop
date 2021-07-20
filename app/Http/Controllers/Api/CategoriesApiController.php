<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use App\Models\CategoriesModel;
use Illuminate\Http\Request;

class CategoriesApiController extends Controller {

    private $categories;

    public function __construct(CategoriesModel $categories) {
        $this->categories = $categories;
    }

    public function index() {
        $categories =  $this->categories->paginate();
        return CategoriesResource::collection($categories);
    }

    public function show(Request $request, $id) {
        $categorie =  $this->categories->find($id);
        return response()->json($categorie);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $this->categories->create($request->all());
        return response()->json(['messagem' => 'Categoria Cadastrada']);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        if (!$categorie = $this->categories->find($id))
            return response()->json(['messagem' => 'Categoria Não Encontrada']);

        $categorie->update($request->all());
        return response()->json(['messagem' => 'Categoria Alterada']);
    }
}
