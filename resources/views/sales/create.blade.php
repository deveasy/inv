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
                            <div class="col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form action="#">
                                            <div class="row g-3 align-center">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-search"></em>
                                                            </div>
                                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Search or scan for an item">
                                                        </div>
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
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price (&#8373;)</th>
                                                    <th scope="col">In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Milo</td>
                                                    <td>200.00</td>
                                                    <td>200</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Nido</td>
                                                    <td>50.00</td>
                                                    <td>250</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Cowbell</td>
                                                    <td>10.00</td>
                                                    <td>250</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Carnation Milk</td>
                                                    <td>150.00</td>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Ideal Milk</td>
                                                    <td>1000.00</td>
                                                    <td>99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Sugar 100g</td>
                                                    <td>210.00</td>
                                                    <td>120</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>Choco Milo</td>
                                                    <td>15.00</td>
                                                    <td>350</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>Yazz Powder</td>
                                                    <td>10.00</td>
                                                    <td>400</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>OMO</td>
                                                    <td>500.00</td>
                                                    <td>350</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6">
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
                                                    <div class="nk-tb-col tb-col-xxl item"><span class="sub-text">Item</span></div>
                                                    <div class="nk-tb-col tb-col-sm qty"><span class="sub-text">Qty</span></div>
                                                    <div class="nk-tb-col tb-col-sm price"><span class="sub-text">Unit Price</span></div>
                                                    <div class="nk-tb-col total"><span class="sub-text">Total</span></div>
                                                    <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span>Laptop</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                            <input type="number" class="form-control number-spinner" value="0">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>2.00</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div>
                                                            <input type="text" class="form-control-plaintext" value="200.00">
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
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
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span>Laptop</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                            <input type="number" class="form-control number-spinner" value="0">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>100.00</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div>
                                                            <input type="text" class="form-control-plaintext" value="200.00">
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
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
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span>Laptop</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="form-control-wrap number-spinner-wrap">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                            <input type="number" class="form-control number-spinner" value="0">
                                                            <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>2500.00</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div>
                                                            <input type="text" class="form-control-plaintext" value="200.00">
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
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
                                            
                                            <div class="card text-white bg-primary">
                                                <div class="card-header">Header</div>
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
                                                            <div class="form-control-wrap">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-lg" placeholder="Total Amount" readonly>
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-secondary">Pay Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .pagination-goto -->
                                                    </div><!-- .nk-block-between -->
                                                </div>
                                            </div><!-- .payment card -->
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