@extends('site.index_site')
@section('title','SmallShop')


@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-20">
            <div class="card-header ">
                <h4>Shopping Cart</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dress</td>
                                <td><span>$84.00</span></td>
                                <td class="w-32 "><input type="text" class="form-control text-center h-30" placeholder="1"></td>
                                <td><span>$84.00</span></td>
                                <td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <form class="text-left  product-cart m-t-20 mb-0">
                    <div class="row">
                        <div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
                        <div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card ">
            <div class="card-header ">
                <h4>Order Summery</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td class="text-right">$456.00</td>
                            </tr>
                            <tr>
                                <td><span>Totals</span></td>
                                <td class="text-right text-muted"><span>$456.00</span></td>
                            </tr>
                            <tr>
                                <td><span>Order Total</span></td>
                                <td>
                                    <h2 class="price text-right">$456.00</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form class="text-center">
                    <input class="btn btn-primary mt-2" type="submit" value="Proceed To Checkout">
                    <input class="btn btn-success mt-2" type="submit" value="Continue Shopping">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection