@extends('master')

@section('title','New-Product')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between main-wrapper">
            <div class="panel-heading-table">
                <h2>Add New Product</h2>
            </div>
            <a href="">
                <button type="button" class="btn btn-primary btn-xs text-white">Product list</button>
            </a>
        </div>
        <div class="card">
            <div class="card-body card-block">
                <form action="{{ route('product.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class=" form-title form-control-label">Product Type</label>
                                <select name="Product_Type" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select select Type</option>
                                    <option value="0">In Stock Space</option>
                                    <option value="1">Pre Order</option>
                                    
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  class=" form-title form-control-label">Product Store</label>
                                <select name="Product_Store" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select Store</option>
                                    <option value="0">Blue 40</option>
                                    <option value="1">Red In</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-title form-control-label">Product Special Search</label>
                            <input name="Product_Special_Search" type="text" placeholder="Product Special Search" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="" class="form-title form-control-label">Product Name</label>
                            <input name="Product_Name" type="text" placeholder="Enter Product Name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class=" form-title form-control-label">Product Slug</label>
                            <input name="Product_Slug" type="text" placeholder="Product Slug" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-title form-control-label">Product Sku</label>
                            <input type="text" placeholder="Product Slug" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  class="form-title  form-control-label">Product Category</label>
                                <select name="product_category" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select Category</option>
                                    <option value="1">Tops & T-Shirts</option>
                                    <option value="2">Pants</option>
                                    <option value="3">Skirts</option>
                                    <option value="4">Shirts</option>
                                    <option value="5">Bodycon</option>
                                    <option value="6">Jackets & Coats</option>
                                    <option value="6">Sweaters & Hoodies</option>
                                    <option value="7">Jumpsuits</option>
                                    <option value="8">Socks & Tights</option>
                                    <option value="9">GYM & Sports</option>
                                    <option value="10">Dresses</option>
                                    <option value="11">Kurtis & Tunics</option>
                                    <option value="12">Lehenga</option>
                                    <option value="13">Sarees</option>
                                    <option value="13">Scarves & Shawls</option>
                                    <option value="14">Shrugs</option>
                                    <option value="15">Gowns</option>
                                    <option value="15">Salwar Suit (3 PCS)</option>
                                    <option value="16">Kaptan Dresses</option>
                                    <option value="17">Lingeries</option>
                                    <option value="18">Casual Shoes</option>
                                    <option value="19">Formal Shoes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Sub Category</label>
                                <input name="product_sub_category" type="text" placeholder="Product Sub Category" class="form-control">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Brand</label>
                                <select name="Product_Brand" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select product Brand</option>
                                    <option value="0">Blue 40</option>
                                    <option value="1">Expert Items</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Purchase Price</label>
                                <input name="Product_Purchase_Price" type="number" placeholder="Enter Purchase Price" class="form-control">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Sale Price</label>
                                <input name="Product_Sale_Price" type="number" placeholder="Enter Sale Price" class="form-control">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Unit</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select product Unit</option>
                                    <option value="0">Color & Size</option>
                                    <option value="1">Color</option>
                                    <option value="3">Size</option>
                                    <option value="4">Pc(s)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Tag</label>
                                <input name="Product_Tag" type="text" placeholder="Add a tag" class="form-control">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Alert Quantity</label>
                                <input type="number" value="10" class="form-control">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Status</label>
                                <select name="Product_Status" class="form-select form-control" aria-label="Default select example">
                                    <option value="0">Active</option>
                                    <option value="1">Inacive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group mt-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Product Description</label>
                                <textarea name="Product_Description" class="form-control" name="summernote" id="summernote"></textarea>  
                            </div>
                        </div>
                           
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="form-group d-flex flex-column">
                                    <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Seo Friendly Title</label>
                                    <span style="font-size: 13px">*Write An Seo Friendly Title Within 60 Characters</span>
                                    <input name="Seo_Friendly_Title" type="text" placeholder="Enter Seo Friendly Title" class="form-control">
                                </div>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group d-flex flex-column">
                                    <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Seo Friendly Description</label>
                                    <span style="font-size: 13px">*Write An Seo Description Title Within 160 Characters</span>
                                    <textarea name="Seo_Friendly_Description" type="text" placeholder="Enter Seo Friendly Description" class="form-control"></textarea>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end sub-btn">
                        <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                    </div>
                </form>
            </div>
           
        </div>
    </div>
@endsection