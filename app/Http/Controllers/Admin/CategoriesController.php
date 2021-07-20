<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateCategories;
use App\Http\Controllers\Controller;
use App\Models\CategoriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoriesController extends Controller {

    private $dados;
    private $categories;

    public function __construct(CategoriesModel $categories) {
        $this->categories = $categories;
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->dados['categories'] = $this->categories->paginate(10);
        return view('admin.categories.categories_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
         $this->dados['titulo'] = 'categories';
         return view('admin.categories.categories_create', $this->dados);
    }
    
    public function store(StoreUpdateCategories $request) {
            $this->categories->create($request->all());
            return redirect('/admin/categories');
    }

  public function show($id)
    {
        if (!$categories = $this->categories->find($id)) {
            return redirect()->back();
        }

       $this->dados['titulo'] = 'categories';
       $this->dados['categories'] = $categories;
        return view('admin.categories.categories_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{categories}Model  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
            $categories = $this->categories->find($id);
            $this->dados['categories'] = $categories;
            $this->dados['titulo'] = 'categories';
            return view('admin.categories.categories_edit', $this->dados);
    }
    
    public function update(StoreUpdateCategories $request, $id) {
            $this->categories->find($id)->update($request->all());
            return redirect('admin/categories');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            categoriesModel::where('id', $id)->delete();
            return redirect('/admin/categories');
        } else {
            $categories = categoriesModel::where('id', $id)->first();
            $this->dados['categories'] = $categories;
            $this->dados['titulo'] = 'categories';
            return view('admin/categories.categories_delete', $this->dados);
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

        $categories = $this->categories
                            ->where(function($query) use ($request) {
                                if ($request->name) {
                                    $query->where('name', $request->name);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.categories.categories_list', compact('categories', 'filters'));
    }
    }