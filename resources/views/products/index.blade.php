@extends('layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Products</h3>
                                <div class="nk-block-des text-soft">
                                    <!-- <p>Client Report details.</p> -->
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>10days</span></a></li>
                                                            <li><a href="#"><span>20days</span></a></li>
                                                            <li><a href="#"><span>30days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('products.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em>
                                                    <span>Add Product</span>
                                                </a>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#addProduct"><em class="icon ni ni-arrow-down"></em>
                                                    <span>Import Products</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <table class="nk-tb-list nk-tb-ulist">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-all">
                                                        <label class="custom-control-label" for="pid-all"></label>
                                                    </div>
                                                </th>
                                                <th class="nk-tb-col"><span class="sub-text">Product Name</span></th>
                                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Product Code</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Thumbnail</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Buying price</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Selling price</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Stock Quantity</span></th>
                                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span></th>
                                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Brand</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Projects</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr><!-- .nk-tb-item -->
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-01">
                                                        <label class="custom-control-label" for="pid-01"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">{{ $product->product_name }}</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">#6H4G67</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="user-avatar md"><img src="./images/crm/product/a.jpg" alt=""></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span class="amount">$1000.00</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span class="amount">GHS{{ $product->price }}</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span>Electric</span>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span>55</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span class="badge badge-dim badge-outline-primary">Available</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span>Samsung</span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editProduct"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteProduct"><em class="icon ni ni-delete"></em><span>Delete Product</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            @endforeach
                                        </tbody>
                                    </table><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                        {{ $products->links() }}
                                        </div>
                                        <div class="g">
                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page</div>
                                                <div>
                                                    <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                        <option value="page-1">1</option>
                                                        <option value="page-2">2</option>
                                                        <option value="page-4">4</option>
                                                        <option value="page-5">5</option>
                                                        <option value="page-6">6</option>
                                                        <option value="page-7">7</option>
                                                        <option value="page-8">8</option>
                                                        <option value="page-9">9</option>
                                                        <option value="page-10">10</option>
                                                        <option value="page-11">11</option>
                                                        <option value="page-12">12</option>
                                                        <option value="page-13">13</option>
                                                        <option value="page-14">14</option>
                                                        <option value="page-15">15</option>
                                                        <option value="page-16">16</option>
                                                        <option value="page-17">17</option>
                                                        <option value="page-18">18</option>
                                                        <option value="page-19">19</option>
                                                        <option value="page-20">20</option>
                                                    </select>
                                                </div>
                                                <div>OF 102</div>
                                            </div>
                                        </div><!-- .pagination-goto -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
<div class="modal fade" id="addProduct">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Import Products</h5>
                <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="custom-file">
                                        <input type="file" name="import" class="custom-file-input" id="import">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- .Add Modal-Content -->
@endsection