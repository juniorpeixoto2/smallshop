<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateImages;
use App\Http\Controllers\Controller;
use App\Models\ImagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ImagesController extends Controller {

    private $dados;
    private $images;

    public function __construct(ImagesModel $images) {
        $this->images = $images;
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->dados['images'] = $this->images->paginate(10);
        return view('admin.images.images_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
         $this->dados['titulo'] = 'images';
         return view('admin.images.images_create', $this->dados);
    }
    
    public function store(StoreUpdateImages $request) {
            $this->images->create($request->all());
            return redirect('/admin/images');
    }

  public function show($id)
    {
        if (!$images = $this->images->find($id)) {
            return redirect()->back();
        }

       $this->dados['titulo'] = 'images';
       $this->dados['images'] = $images;
        return view('admin.images.images_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{images}Model  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
            $images = $this->images->find($id);
            $this->dados['images'] = $images;
            $this->dados['titulo'] = 'images';
            return view('admin.images.images_edit', $this->dados);
    }
    
    public function update(StoreUpdateImages $request, $id) {
            $this->images->find($id)->update($request->all());
            return redirect('admin/images');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            imagesModel::where('id', $id)->delete();
            return redirect('/admin/images');
        } else {
            $images = imagesModel::where('id', $id)->first();
            $this->dados['images'] = $images;
            $this->dados['titulo'] = 'images';
            return view('admin/images.images_delete', $this->dados);
        }
    }

     /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->only('product_id');

        $images = $this->images
                            ->where(function($query) use ($request) {
                                if ($request->product_id) {
                                    $query->where('product_id', $request->product_id);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.images.images_list', compact('images', 'filters'));
    }
    }