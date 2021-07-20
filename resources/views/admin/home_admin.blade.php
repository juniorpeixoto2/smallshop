@extends('admin.index_admin')
@section('title','Painel')
@section('menu_home','active')


@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body knob-chart">
                <div class="row mb-0">
                    <div class="col-6">
                        <div class="card-icon d-flex">
                            <input type="text" class="knob" value="33" data-thickness="0.15" data-width="80" data-height="80" data-fgColor="#01cf6b" data-bgColor="#162050">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dash3 text-center">
                            <small class="text-muted mt-0">New Users</small>
                            <h2 class="text-success mb-0">612</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body knob-chart">
                <div class="row mb-0">
                    <div class="col-6">
                        <div class="card-icon d-flex">
                            <input type="text" class="knob" value="85" data-thickness="0.15" data-width="80" data-height="80" data-fgColor="#3454f5" data-bgColor="#162050">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dash3 text-center">
                            <small class="text-muted mt-0">Sales</small>
                            <h2 class="text-primary mb-0">458</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body knob-chart">
                <div class="row mb-0">
                    <div class="col-6">
                        <div class="card-icon d-flex">
                            <input type="text" class="knob" value="74" data-thickness="0.15" data-width="80" data-height="80" data-fgColor="#f9282b" data-bgColor="#162050">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dash3 text-center">
                            <small class="text-muted mt-0">Profit</small>
                            <h2 class="text-danger mb-0">$132</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body knob-chart">
                <div class="row mb-0">
                    <div class="col-6">
                        <div class="card-icon d-flex">
                            <input type="text" class="knob" value="45" data-thickness="0.15" data-width="80" data-height="80" data-fgColor="#fe7100" data-bgColor="#162050">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dash3 text-center">
                            <small class="text-muted mt-0">Tax</small>
                            <h2 class="text-warning mb-0">$876</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row row-deck">



    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title float-left">Revenue</h4>
                <h4 class="float-right"><i class="fa fa-caret-up text-success mr-1 "></i>15%</h4>
            </div>
            <div class="card-body ">
                <div class="mb-2 text-center"><label class="tx-12 text-muted">Total Revenue of the Year</label>
                    <h4 class="font-weight-bold">$75436</h4>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col text-center ">
                    <label class="tx-12 text-muted">weekly</label>
                    <h5 class="font-weight-bold">2.34%</h5>
                </div><!-- col -->
                <div class="col text-center border-left">
                    <label class="tx-12 text-muted">Monthly</label>
                    <h5 class="font-weight-bold">10.34%</h5>
                </div><!-- col -->
            </div>
            <div class="sparkline card-body" data-type="bar" data-width="100%" data-height="165px" data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#3454f5">
                15, 17, 16, 11, 12, 15, 10, 19, 16, 13, 12, 15, 17, 16, 11
            </div>
        </div>
    </div>
</div>

@endsection