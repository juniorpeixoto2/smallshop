<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MaterialsResource;
use App\Models\MaterialsModel;
use Illuminate\Http\Request;

class MaterialsApiController extends Controller {

    private $materials;

    public function __construct(MaterialsModel $materials) {
        $this->materials = $materials;
    }

    public function index() {
        $materials =  $this->materials->paginate();
        return MaterialsResource::collection($materials);
    }

    public function show(Request $request, $id) {
        $categorie =  $this->materials->find($id);
        return response()->json($categorie);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:materials',
        ]);

        $this->materials->create($request->all());
        return response()->json(['messagem' => 'Material Cadastrado']);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|unique:materials',
        ]);

        if (!$categorie = $this->materials->find($id))
            return response()->json(['messagem' => 'Material Não Encontrado']);

        $categorie->update($request->all());
        return response()->json(['messagem' => 'Material Alterado']);
    }
}
