<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImagesResource;
use App\Models\ImagesModel;
use Illuminate\Http\Request;

class ImagesApiController extends Controller {

    private $images;

    public function __construct(imagesModel $images) {
        $this->images = $images;
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|mimes:jpg',
        ]);

        $image = $request->file('image');
        $image->store('public/images/');

        $insert = [
            'name' => $image->hashName(),
            'product_id' => $request->product_id,
            'cover' => $request->cover ?? 'N',
        ];
        $this->images->create($insert);
        return response()->json(['messagem' => 'Imagem Inserida']);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'product_id' => 'required|exists:images,id',
            'image' => 'required|mimes:jpg',
        ]);

        if (!$categorie = $this->images->find($id))
            return response()->json(['messagem' => 'Imagem Não Encontrado']);

        $categorie->update($request->all());
        return response()->json(['messagem' => 'Imagem Alterado']);
    }
}
