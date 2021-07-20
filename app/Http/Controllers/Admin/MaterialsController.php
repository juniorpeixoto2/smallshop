<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateMaterials;
use App\Http\Controllers\Controller;
use App\Models\MaterialsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MaterialsController extends Controller {

    private $dados;
    private $materials;

    public function __construct(MaterialsModel $materials) {
        $this->materials = $materials;
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->dados['materials'] = $this->materials->paginate(10);
        return view('admin.materials.materials_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
         $this->dados['titulo'] = 'materials';
         return view('admin.materials.materials_create', $this->dados);
    }
    
    public function store(StoreUpdateMaterials $request) {
            $this->materials->create($request->all());
            return redirect('/admin/materials');
    }

  public function show($id)
    {
        if (!$materials = $this->materials->find($id)) {
            return redirect()->back();
        }

       $this->dados['titulo'] = 'materials';
       $this->dados['materials'] = $materials;
        return view('admin.materials.materials_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{materials}Model  $materials
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
            $materials = $this->materials->find($id);
            $this->dados['materials'] = $materials;
            $this->dados['titulo'] = 'materials';
            return view('admin.materials.materials_edit', $this->dados);
    }
    
    public function update(StoreUpdateMaterials $request, $id) {
            $this->materials->find($id)->update($request->all());
            return redirect('admin/materials');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            materialsModel::where('id', $id)->delete();
            return redirect('/admin/materials');
        } else {
            $materials = materialsModel::where('id', $id)->first();
            $this->dados['materials'] = $materials;
            $this->dados['titulo'] = 'materials';
            return view('admin/materials.materials_delete', $this->dados);
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
        $filters = $request->only('name');

        $materials = $this->materials
                            ->where(function($query) use ($request) {
                                if ($request->name) {
                                    $query->where('name', $request->name);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.materials.materials_list', compact('materials', 'filters'));
    }
    }