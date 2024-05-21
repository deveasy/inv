@extends('layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Sale Point</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-5">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="row g-3 align-center">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-search"></em>
                                                        </div>
                                                        <input type="text" class="form-control form-control-lg" name="searchTerm" id="searchInput" placeholder="Search or scan for an item">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <table class="table table-striped" id="productTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price (&#8373;)</th>
                                                    <th scope="col">In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody id="productList">
                                                @php
                                                    $n = 1;
                                                @endphp
                                                @foreach($products as $product)
                                                    <tr id="{{ $product->id }}">
                                                        <td scope="row">@php echo $n; @endphp</th>
                                                        <td class="productName">{{ $product->product_name }}</td>
                                                        <td class="productPrice">{{ $product->price }}</td>
                                                        <td class="productStock">200</td>
                                                    </tr>
                                                @php $n++ @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-7">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h5 class="title">All Invoice</h5>
                                                </div>
                                                <div class="card-tools mr-n1">
                                                    <ul class="btn-toolbar">
                                                        <li>
                                                            <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                        </li><!-- li -->
                                                        <li class="btn-toolbar-sep"></li><!-- li -->
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                    <em class="icon ni ni-setting"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-check">
                                                                        <li><span>Show</span></li>
                                                                        <li class="active"><a href="#">10</a></li>
                                                                        <li><a href="#">20</a></li>
                                                                        <li><a href="#">50</a></li>
                                                                    </ul>
                                                                    <ul class="link-check">
                                                                        <li><span>Order</span></li>
                                                                        <li class="active"><a href="#">DESC</a></li>
                                                                        <li><a href="#">ASC</a></li>
                                                                    </ul>
                                                                    <ul class="link-check">
                                                                        <li><span>Density</span></li>
                                                                        <li class="active"><a href="#">Regular</a></li>
                                                                        <li><a href="#">Compact</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .dropdown -->
                                                        </li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- card-tools -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id">
                                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- card-search -->
                                            </div><!-- .card-title-group -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <table class="table table-orders">
                                                <thead class="tb-odr-head">
                                                    <tr class="tb-odr-item">
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-id">Item</span>
                                                        </th>
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-date d-none d-md-inline-block">Quantity</span>
                                                        </th>
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-date">Price</span>
                                                        </th>
                                                        <th class="tb-odr-amount">
                                                            <span class="tb-odr-status d-none d-md-inline-block">Total</span>
                                                        </th>
                                                        <th class="tb-odr-action">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tb-odr-body" id="cartItems">
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-id"><a href="#">#fasdfadfasdfsadfasfda</a></span>
                                                        </td>
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-date">4</span>
                                                        </td>
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-date">
                                                                <span class="amount">$2300.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount">$2300.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-sm-inline">
                                                                <a href="#" class="btn btn-icon btn-white btn-dim btn-sm btn-primary delete-item"><em class="icon ni ni-cross-sm "></em></a>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-odr-item -->
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info">
                                                            <span class="fw-bold">Discount</span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount">0.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-sm-inline">
                                                                <a href="#" class="btn btn-icon btn-white btn-dim btn-sm btn-primary delete-item"><em class="icon ni ni-cross-sm "></em></a>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-odr-item -->
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info">
                                                            <span class="fw-bold">Tax</span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount">0.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-sm-inline">
                                                                <a href="#" class="btn btn-icon btn-white btn-dim btn-sm btn-primary delete-item"><em class="icon ni ni-cross-sm "></em></a>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-odr-item -->
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info"></td>
                                                        <td class="tb-odr-info">
                                                            <span class="fw-bold">Subtotal</span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount">$2300.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-sm-inline">
                                                                <a href="#" class="btn btn-icon btn-white btn-dim btn-sm btn-primary delete-item"><em class="icon ni ni-cross-sm "></em></a>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-odr-item -->
                                                </tbody>
                                            </table>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="nk-block-between-md g-3">
                                                <div class="g">
                                                    <div class="justify-content-center justify-content-md-start">
                                                        <a href="#" data-toggle="modal" data-target="#addDiscount" class="btn btn-dim btn-outline-primary"><em class="icon ni ni-plus-sm"></em> <span>Discount</span></a>
                                                        <a href="#" class="btn btn-dim btn-outline-primary"><em class="icon ni ni-plus-sm"></em> <span>Note</span></a>
                                                        <a href="#" class="btn btn-dim btn-outline-primary"><em class="icon ni ni-plus-sm"></em> <span>Fee</span></a>
                                                    </div><!-- .additional buttons -->
                                                </div>
                                                <div class="g">
                                                    <div class="d-flex justify-content-center justify-content-md-start gx-3">
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="totalSale">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary btn-dim"><em class="icon ni ni-send"></em><span>Make Payment</span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .payment field -->
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<div class="modal fade" id="addDiscount">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Discount</h5>
                    <form action="#" class="mt-2">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="add-amount">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="add-amount" placeholder="GHS Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="add-status">Status</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-select" id="add-status">
                                            <option value="paid">Paid</option>
                                            <option value="due">Due</option>
                                            <option value="canceled">Canceled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" data-dismiss="modal" class="btn btn-primary" id="addDiscount">Add Discount</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="./js/inv.js"></script>
@endsection