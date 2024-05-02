@extends('layouts.main')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Categories</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs flex-row-reverse">
                        <div class="col-xxl-7">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner position-relative card-tools-toggle">
                                        <div class="card-title-group">
                                            <div class="card-tools">
                                                <div class="form-inline flex-nowrap gx-3">
                                                    <div class="form-wrap w-150px">
                                                        <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                            <option value="">Bulk Action</option>
                                                            <option value="edit">Edit</option>
                                                            <option value="delete">Move To Trash</option>
                                                        </select>
                                                    </div>
                                                    <div class="btn-wrap">
                                                        <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                        <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                    </div>
                                                </div><!-- .form-inline -->
                                            </div><!-- .card-tools -->
                                        </div><!-- .card-title-group -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                        <label class="custom-control-label" for="uid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Description</span></div>
                                                <div class="nk-tb-col"><span class="sub-text">Count</span></div>
                                                <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                            </div><!-- .nk-tb-item -->
                                            @foreach($categories as $category)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span>{{ $category->category_name }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <div class="text-ellipsis w-max-200px">
                                                        <span>{{ $category->category_description }}</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <div>
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="modal" data-target="#editCategory" data-placement="top" title="Edit">
                                                                <em class="icon ni ni-edit-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Move To Trash">
                                                                <em class="icon ni ni-trash-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" data-toggle="modal" data-target="#editCategory"><em class="icon ni ni-edit-fill"></em><span>Edit Category</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            @endforeach
                                        </div><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
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
                        </div><!-- .col -->
                        <div class="col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <form action="{{ route('products.addCategory') }}" method="POST">
                                    @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <span class="form-note">The name that appears on your site.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Name">
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Parent Category</label>
                                                    <span class="form-note">Categories can have a hierarchy.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-control-wrap">
                                                    <select class="form-select" name="parentCategory" data-placeholder="Parent Category">
                                                        <option value="0">None</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDescription">Description</label>
                                                    <span class="form-note">The description is not prominent by default.</span>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm no-resize" name="categoryDescription" id="categoryDescription" placeholder="Write your description"></textarea>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- .row -->
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Add Category</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<!-- Edit Category-->
<div class="modal fade" tabindex="-1" role="dialog" id="editCategory">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Edit Categories</h5>
                <form action="#" class="mt-4">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editName">Category Name</label>
                                <input type="text" class="form-control" id="editName" placeholder="Name" value="Uncategorized">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editSlug">Parent Category</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" name="parentCategory" data-placeholder="Parent Category">
                                        <option value="0">None</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="editDescription">Category Description</label>
                                <textarea class="form-control form-control-sm no-resize" id="editDescription" placeholder="Edit your description"></textarea>
                            </div>
                        </div><!-- .col -->
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-dismiss="modal" class="btn btn-primary">Update</button>
                                </li>
                                <li>
                                    <a href="#" class="link link-light" data-dismiss="modal">Cancel</a>
                                </li>
                            </ul>
                        </div><!-- .col -->
                    </div>
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
@endsection