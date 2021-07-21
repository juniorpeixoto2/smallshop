@extends('site.index_site')
@section('title','SmallShop')


@section('content')

<div class="row">
    <div class="col-md-12 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4>Categorias</h4>
            </div>
            <div class="filter-content">
                <div class="card-body">
                    <form>
                        @foreach($categories as $categorie)
                        <label class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-label">
                                {{ $categorie->name }}
                            </span>
                        </label> <!-- form-check.// -->
                        @endforeach
                    </form>
                </div> <!-- card-body.// -->
            </div>
        </div>


    </div>

    <div class="col-md-12 col-lg-9">
        <div class="row product-list">

            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class=" product_item text-center">
                        <div class="product_img bg_gray">
                            <img class="pro_img" alt="Product" src="assets/img/products/1.jpg">
                            <div class="hover">
                                <div class="shop-details">
                                    <a href="#" class="adtocart bg-primary">
                                        <i class="fe fe-shopping-cart"></i>
                                    </a>
                                    <a href="#" class="adtocart bg-success">
                                        <i class="fe fe-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_details">
                            <div class="text-center text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5><a href="product-details.html">{{ $product->name }}</a></h5>
                            <ul class="product_price list-unstyled">
                                <li class="new_price">$ {{ $product->price }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>

@endsection