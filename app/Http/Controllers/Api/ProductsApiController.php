<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsApiController extends Controller {

    private $products;

    public function __construct(ProductsModel $products) {
        $this->products = $products;
    }

    public function index() {
        $products =  $this->products
            ->with('images')
            ->paginate();
        return ProductsResource::collection($products);
    }

    public function show(Request $request, $id) {
        $categorie =  $this->products->find($id);
        return response()->json($categorie);
    }

    public function store(Request $request) {
        $request->validate([
            'ean' => 'required|unique:products',
            'categorie_id' => 'required|exists:categories,id',
            'material_id' => 'required|exists:materials,id',
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'size' => 'required',
            'quantity' => 'required',
        ]);

        $this->products->create($request->all());
        return response()->json(['messagem' => 'Produto Cadastrado']);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|unique:products',
        ]);

        if (!$categorie = $this->products->find($id))
            return response()->json(['messagem' => 'Produto Não Encontrado']);

        $categorie->update($request->all());
        return response()->json(['messagem' => 'Produto Alterado']);
    }
}
