<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateProducts;
use App\Http\Controllers\Controller;
use App\Models\ProductsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller {

    private $dados;
    private $products;

    public function __construct(ProductsModel $products) {
        $this->products = $products;
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->dados['products'] = $this->products->paginate(10);
        return view('admin.products.products_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
         $this->dados['titulo'] = 'products';
         return view('admin.products.products_create', $this->dados);
    }
    
    public function store(StoreUpdateProducts $request) {
            $this->products->create($request->all());
            return redirect('/admin/products');
    }

  public function show($id)
    {
        if (!$products = $this->products->find($id)) {
            return redirect()->back();
        }

       $this->dados['titulo'] = 'products';
       $this->dados['products'] = $products;
        return view('admin.products.products_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{products}Model  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
            $products = $this->products->find($id);
            $this->dados['products'] = $products;
            $this->dados['titulo'] = 'products';
            return view('admin.products.products_edit', $this->dados);
    }
    
    public function update(StoreUpdateProducts $request, $id) {
            $this->products->find($id)->update($request->all());
            return redirect('admin/products');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            productsModel::where('id', $id)->delete();
            return redirect('/admin/products');
        } else {
            $products = productsModel::where('id', $id)->first();
            $this->dados['products'] = $products;
            $this->dados['titulo'] = 'products';
            return view('admin/products.products_delete', $this->dados);
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
        $filters = $request->only('ean');

        $products = $this->products
                            ->where(function($query) use ($request) {
                                if ($request->ean) {
                                    $query->where('ean', $request->ean);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.products.products_list', compact('products', 'filters'));
    }
    }