<?php

namespace App\Http\Controllers;

use App\Models\ArtsModel;
use App\Models\CategoriesModel;
use App\Models\EventsModel;
use App\Models\ModelosModel;
use App\Models\MusicsModel;
use App\Models\PostsModel;

class SiteController extends Controller {

    private $dados = [];

    public function __construct() {
    }

    public function index() {
        return view('site.index_site', $this->dados);
    }
}
