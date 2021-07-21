<?php

namespace App\Http\Controllers;

use App\Models\ArtsModel;
use App\Models\CategoriesModel;
use App\Models\EventsModel;
use App\Models\ModelosModel;
use App\Models\MusicsModel;
use App\Models\PostsModel;
use App\Models\ProductsModel;

class SiteController extends Controller {

    private $dados = [];
    private $products;
    private $categories;


    public function __construct(CategoriesModel $categories, ProductsModel $products) {
        $this->products = $products;
        $this->categories = $categories;
    }

    public function index() {
        $this->dados['categories'] = $this->categories->orderBy('name')->get();
        $this->dados['products'] = $this->products->orderBy('name')->get();
        return view('site.home_site', $this->dados);
    }

    public function cart() {
        return view('site.cart', $this->dados);
    }
}
