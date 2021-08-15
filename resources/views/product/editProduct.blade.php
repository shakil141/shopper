@extends('master')

@section('title','New-Product')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between main-wrapper">
            <div class="panel-heading-table">
                <h2>Edit {{ $single_product->product_name }}</h2>
                <a href="{{ route('product.create') }}">
                    <button type="button" class="btn btn-primary btn-xs text-white">Add Product</button>
                </a>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('product.index') }}">
                    <button type="button" class="btn btn-primary btn-xs text-white">Product list</button>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body card-block">
                
                <form action="" method="POST" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class=" form-title form-control-label">Product Type</label>
                                <select name="product_type" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select select Type</option>
                                    <option value="In Stock Space">In Stock Space</option>
                                    <option value="Pre Order">Pre Order</option>
                                  </select>    
                            </div>
                            @error('product_type')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  class=" form-title form-control-label">Product Store</label>
                                <select name="product_store" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select Store</option>
                                    <option value="Blue 40">Blue 40</option>
                                    <option value="Red In">Red In</option>
                                </select>
                            </div>
                            @error('product_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Special Search</label>
                                <input name="product_special_search" value="{{ old('product_special_search') ?? $single_product->product_special_search  }}" type="text" placeholder="Product Special Search" class="form-control @error('product_special_search') is-invalid @enderror">
                            </div>
                            @error('product_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Name</label>
                                <input name="product_name" value="{{ old('product_name') ?? $single_product->product_name }}" type="text" placeholder="Enter Product Name" class="form-control">
                            </div>
                            @error('product_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class=" form-title form-control-label">Product Slug</label>
                                <input name="product_slug" value="{{ old('product_slug') ?? $single_product->product_slug }}" type="text" placeholder="Product Slug" class="form-control">
                            </div>
                            @error('product_slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Sku</label>
                                <input type="text" placeholder="Product Slug" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  class="form-title  form-control-label">Product Category</label>
                                <select name="product_category" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select Category</option>
                                    <option value="Tops & T-Shirts">Tops & T-Shirts</option>
                                    <option value="Pants">Pants</option>
                                    <option value="Skirts">Skirts</option>
                                    <option value="Shirts">Shirts</option>
                                    <option value="Bodycon">Bodycon</option>
                                    <option value="Jackets & Coats">Jackets & Coats</option>
                                    <option value="Sweaters & Hoodies">Sweaters & Hoodies</option>
                                    <option value="Jumpsuits">Jumpsuits</option>
                                    <option value="Socks & Tights">Socks & Tights</option>
                                    <option value="GYM & Sports">GYM & Sports</option>
                                    <option value="Dresses">Dresses</option>
                                    <option value="Kurtis & Tunics">Kurtis & Tunics</option>
                                    <option value="Lehenga">Lehenga</option>
                                    <option value="Sarees">Sarees</option>
                                    <option value="Scarves & Shawls">Scarves & Shawls</option>
                                    <option value="Shrugs">Shrugs</option>
                                    <option value="Gowns">Gowns</option>
                                    <option value="Salwar Suit (3 PCS)">Salwar Suit (3 PCS)</option>
                                    <option value="Kaptan Dresses">Kaptan Dresses</option>
                                    <option value="Lingeries">Lingeries</option>
                                    <option value="Casual Shoes">Casual Shoes</option>
                                    <option value="Formal Shoes">Formal Shoes</option>
                                </select>
                            </div>
                            @error('product_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Sub Category</label>
                                <input name="product_sub_category" value="{{ old('product_sub_category') ?? $single_product->product_sub_category }}" type="text" placeholder="Product Sub Category" class="form-control">
                            </div>
                            @error('product_sub_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Brand</label>
                                <select name="product_brand" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select product Brand</option>
                                    <option value="Blue 40">Blue 40</option>
                                    <option value="Expert Items">Expert Items</option>
                                </select>
                            </div>
                            @error('product_brand')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Purchase Price</label>
                                <input name="product_purchase_price" value="{{ old('product_purchase_price') ?? $single_product->product_purchase_price }}" type="number" placeholder="Enter Purchase Price" class="form-control">
                            </div>
                            @error('product_purchase_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Sale Price</label>
                                <input name="product_sale_price" value="{{ old('product_sale_price') ?? $single_product->product_sale_price }}" type="number" placeholder="Enter Sale Price" class="form-control">
                            </div>
                            @error('product_sale_price')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Unit</label>
                                <select name="product_unit" class="form-select form-control" aria-label="Default select example">
                                    <option selected hidden value="">Select product Unit</option>
                                    <option value="Color & Size">Color & Size</option>
                                    <option value="Color">Color</option>
                                    <option value="Size">Size</option>
                                    <option value="Pc(s)">Pc(s)</option>
                                </select>
                            </div>
                            @error('product_unit')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Tag</label>
                                <input name="product_tag" value="{{ old('product_tag') ?? $single_product->product_tag }}" type="text" placeholder="Add a tag" class="form-control">
                            </div>
                            @error('product_tag')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Alert Quantity</label>
                                <input name="alert_quantity"  type="number" value="10" class="form-control">
                            </div>
                            
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label">Product Status</label>
                                <select name="product_status" class="form-select form-control" aria-label="Default select example">
                                    <option value='' selected disable>Select</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inacive</option>
                                </select>
                            </div>
                            @error('product_status')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group mt-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Product Description</label>
                                <textarea name="product_description" value="{{ old('product_description') ?? $single_product->product_description }}" class="form-control" name="summernote" id="summernote"></textarea>  
                            </div>
                            @error('product_description')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                           
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="form-group d-flex flex-column">
                                    <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Seo Friendly Title</label>
                                    <span style="font-size: 13px">*Write An Seo Friendly Title Within 60 Characters</span>
                                    <input name="seo_friendly_title" value="{{ old('seo_friendly_title') ?? $single_product->seo_friendly_title }}" type="text" placeholder="Enter Seo Friendly Title" class="form-control">
                                </div>
                                @error('seo_friendly_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group d-flex flex-column">
                                    <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Seo Friendly Description</label>
                                    <span style="font-size: 13px">*Write An Seo Description Title Within 160 Characters</span>
                                    <textarea name="seo_friendly_description" value="{{ old('seo_friendly_description') ?? $single_product->seo_friendly_description }}" type="text" placeholder="Enter Seo Friendly Description" class="form-control"></textarea>
                                </div>
                                @error('seo_friendly_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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