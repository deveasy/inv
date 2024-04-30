@extends('layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Warehouses List</h3>
                                <div class="nk-block-des text-soft">
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addWarehouse"><em class="icon ni ni-plus"></em><span>Add Warehouse</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-tools">
                                            <div class="form-inline flex-nowrap gx-3">
                                                <div class="form-wrap w-150px">
                                                    <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                        <option value="">Bulk Action</option>
                                                        <option value="email">Send Email</option>
                                                        <option value="archive">Archive </option>
                                                        <option value="trash">Trash </option>
                                                    </select>
                                                </div>
                                                <div class="btn-wrap">
                                                    <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                    <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                </div>
                                            </div><!-- .form-inline -->
                                        </div><!-- .card-tools -->
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
                                                <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by Country">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- card-search -->
                                    </div><!-- .card-title-group -->
                                </div><!-- .card-inner -->
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
                                                <th class="nk-tb-col"><span class="sub-text">Warehouse Name</span></th>
                                                <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Country</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Address (Lane)</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Warehouse Code</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-right gx-1">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Warehouse</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr><!-- .nk-tb-item -->
                                        </thead>
                                        <tbody>
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
                                                            <h6 class="title">London Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">England</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">199 Bishopsgate, London</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6H4G67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-02">
                                                        <label class="custom-control-label" for="pid-02"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Boston Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">USA</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">182/A Y-ra, Boston</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#2GB48K</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-03">
                                                        <label class="custom-control-label" for="pid-03"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Kualalampur Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">Malaysia</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">Ipoh, Johor Bahru, Kualalampur</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6L3G60</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-04">
                                                        <label class="custom-control-label" for="pid-04"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Chicago Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">Canada</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">23/9 B/house, Chicago </a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#9L4K67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-05">
                                                        <label class="custom-control-label" for="pid-05"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">London Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">England</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">199 Bishopsgate, London</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#9K26GA</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-06">
                                                        <label class="custom-control-label" for="pid-06"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Mumbai Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">India</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">Narottam Morarji Marg, Mumbai</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6H4G67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-07">
                                                        <label class="custom-control-label" for="pid-07"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Madrid Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">Spain</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">Gran Vía, Madrid.</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6H4G67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-08">
                                                        <label class="custom-control-label" for="pid-08"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Kualalampur Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">Malaysia</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">Ipoh, Johor Bahru, Kualalampur</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6L3G60</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-09">
                                                        <label class="custom-control-label" for="pid-09"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Chicago Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">Canada</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">23/9 B/house, Chicago </a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#9L4K67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid-10">
                                                        <label class="custom-control-label" for="pid-10"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">Mumbai Warehouse</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span><a href="#">India</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><a href="#">Narottam Morarji Marg, Mumbai</a></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span><a href="#">#6H4G67</a></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Detsils</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#editWarehouse"><em class="icon ni ni-edit"></em><span>Edit Info</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#deleteWarehouse"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                        </tbody>
                                    </table><!-- .nk-tb-list -->
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
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection