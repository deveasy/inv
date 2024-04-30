@extends('layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add Product</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-lg-8">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('products.store') }}" method="POST">
                                        @csrf
                                            <div class="row g-gs">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="productName">Title</label>
                                                        <input type="text" class="form-control" name="productName" id="productName" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Description</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote-lg summernote-minimal" name="productDescription"> </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div><!-- .card -->
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Pricing</h5>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name-1">Full Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="full-name-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email-address-1">Email address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="email-address-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no-1">Phone No</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="phone-no-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="pay-amount-1">Amount</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="pay-amount-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Communication</label>
                                                    <ul class="custom-control-group g-3 align-center">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-email-1">
                                                                <label class="custom-control-label" for="com-email-1">Email</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-sms-1">
                                                                <label class="custom-control-label" for="com-sms-1">SMS</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-phone-1">
                                                                <label class="custom-control-label" for="com-phone-1">Phone</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Payment Methods</label>
                                                    <ul class="custom-control-group g-3 align-center">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-card-1">
                                                                <label class="custom-control-label" for="pay-card-1">Card</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1">
                                                                <label class="custom-control-label" for="pay-bitcoin-1">Bitcoin</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-cash-1">
                                                                <label class="custom-control-label" for="pay-cash-1">Cash</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .Pricing card -->
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Inventory</h5>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name-1">Full Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="full-name-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email-address-1">Email address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="email-address-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone-no-1">Phone No</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="phone-no-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="pay-amount-1">Amount</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="pay-amount-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Communication</label>
                                                    <ul class="custom-control-group g-3 align-center">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-email-1">
                                                                <label class="custom-control-label" for="com-email-1">Email</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-sms-1">
                                                                <label class="custom-control-label" for="com-sms-1">SMS</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="com-phone-1">
                                                                <label class="custom-control-label" for="com-phone-1">Phone</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Payment Methods</label>
                                                    <ul class="custom-control-group g-3 align-center">
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-card-1">
                                                                <label class="custom-control-label" for="pay-card-1">Card</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1">
                                                                <label class="custom-control-label" for="pay-bitcoin-1">Bitcoin</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="pay-cash-1">
                                                                <label class="custom-control-label" for="pay-cash-1">Cash</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .Inventory card -->
                            </div><!-- .col -->
                            <div class="col-lg-4">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="row g-gs">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Product Image</label>
                                                    <div class="upload-zone">
                                                        <div class="dz-message" data-dz-message>
                                                            <span class="dz-message-text">Drag and drop file</span>
                                                            <span class="dz-message-or">or</span>
                                                            <button class="btn btn-primary">SELECT</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Product Category</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select"  name="category" data-placeholder="Categories">
                                                            <option value="0">Uncategorized</option>
                                                            <option value="1">Covid</option>
                                                            <option value="2">SEO</option>
                                                            <option value="3">Website</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addTags">Tags</label>
                                                    <input type="text" class="form-control" id="addTags" placeholder="Tags">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addSlug">Slug</label>
                                                    <input type="text" class="form-control" id="addSlug" placeholder="Slug">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Parent</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-placeholder="page">
                                                            <option value="main">Main Page (No Parent)</option>
                                                            <option value="home">Home Page</option>
                                                            <option value="about">About Page</option>
                                                            <option value="service">Service Page</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="addDate">Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar"></em>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" id="addDate" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Select Status</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-placeholder="Status">
                                                            <option value="published">Published</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="draft">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="g-3 align-center flex-wrap">
                                                        <div class="g">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="addComment">
                                                                <label class="custom-control-label" for="addComment">Allow Comments</label>
                                                            </div>
                                                        </div>
                                                        <div class="g">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="addtPings">
                                                                <label class="custom-control-label" for="addtPings">Allow Pings</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                        <li>
                                                            <button type="submit" class="btn btn-primary">Save Product</button>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="link link-light">Save to Draft</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection