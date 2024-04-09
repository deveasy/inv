<x-main-layout>
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
                            <div class="col-xxl-7">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form action="#">
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
                                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="slug">Slug</label>
                                                        <span class="form-note">The “slug” is URL-friendly version of the name.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="slug" placeholder="Slug">
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
                                                        <select class="form-select" data-placeholder="Parent Category">
                                                            <option value="default">None</option>
                                                            <option value="uncategorized">Uncategorized</option>
                                                            <option value="covid">Covid</option>
                                                            <option value="seo">SEO</option>
                                                            <option value="website">Website</option>
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
                                                        <textarea class="form-control form-control-sm no-resize" id="addDescription" placeholder="Write your description"></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Add New Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- form -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-5">
                                <div class="card card-bordered">
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
                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Slug</span></div>
                                                    <div class="nk-tb-col"><span class="sub-text">Count</span></div>
                                                    <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span>Uncategorized</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <div class="text-ellipsis w-max-200px">
                                                            <span>—</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>uncategorized</span>
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
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid2">
                                                            <label class="custom-control-label" for="uid2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span>SEO</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <div class="text-ellipsis w-max-200px">
                                                            <span>Category description is a paragraph or two of content on the page representing an entire category of items for sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>seo</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div>
                                                            <span>2</span>
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
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid3">
                                                            <label class="custom-control-label" for="uid3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span>Covid</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <div class="text-ellipsis w-max-200px">
                                                            <span>—</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>covid</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div>
                                                            <span>1</span>
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
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-main-layout>