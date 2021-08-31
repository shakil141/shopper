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
                
                <form action="{{ route('product.update' , ['product' => $single_product->id ]) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class=" form-title form-control-label">Product Type</label>
                                <select name="product_type" class="form-select form-control" aria-label="Default select example">
                                    <option value="In Stock Space" {{ $single_product->product_type == 'In Stock Space' ? 'selected' : '' }} >In Stock Space</option>
                                    <option value="Pre Order" {{ $single_product->product_type == 'Pre Order' ? 'selected' : '' }} >Pre Order</option>
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
                                    <option value="Blue 40" {{ $single_product->product_store == 'Blue 40' ? 'selected' : '' }} >Blue 40</option>
                                    <option value="Red In" {{ $single_product->product_store == 'Red In' ? 'selected' : '' }} >Red In</option>
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
                    
                                    <option value="Tops & T-Shirts" {{ $single_product->product_category == 'Tops & T-Shirts' ? 'selected' : '' }} >Tops & T-Shirts</option>
                                    <option value="Pants" {{ $single_product->product_category == 'Pants' ? 'selected' : '' }} >Pants</option>
                                    <option value="Skirts" {{ $single_product->product_category == 'Skirts' ? 'selected' : '' }} >Skirts</option>
                                    <option value="Shirts" {{ $single_product->product_category == 'Shirts' ? 'selected' : '' }} >Shirts</option>
                                    <option value="Bodycon" {{ $single_product->product_category == 'Bodycon' ? 'selected' : '' }} >Bodycon</option>
                                    <option value="Jackets & Coats" {{ $single_product->product_category == 'Jackets & Coats' ? 'selected' : '' }} >Jackets & Coats</option>
                                    <option value="Sweaters & Hoodies" {{ $single_product->product_category == 'Sweaters & Hoodies' ? 'selected' : '' }} >Sweaters & Hoodies</option>
                                    <option value="Jumpsuits" {{ $single_product->product_category == 'Jumpsuits' ? 'selected' : '' }} >Jumpsuits</option>
                                    <option value="Socks & Tights" {{ $single_product->product_category == 'Socks & Tights' ? 'selected' : '' }} >Socks & Tights</option>
                                    <option value="GYM & Sports" {{ $single_product->product_category == 'GYM & Sports' ? 'selected' : '' }} >GYM & Sports</option>
                                    <option value="Dresses" {{ $single_product->product_category == 'Dresses' ? 'selected' : '' }} >Dresses</option>
                                    <option value="Kurtis & Tunics" {{ $single_product->product_category == 'Kurtis & Tunics' ? 'selected' : '' }} >Kurtis & Tunics</option>
                                    <option value="Lehenga" {{ $single_product->product_category == 'Lehenga' ? 'selected' : '' }} >Lehenga</option>
                                    <option value="Sarees" {{ $single_product->product_category == 'Sarees' ? 'selected' : '' }} >Sarees</option>
                                    <option value="Scarves & Shawls" {{ $single_product->product_category == 'Scarves & Shawls' ? 'selected' : '' }}>Scarves & Shawls</option>
                                    <option value="Shrugs" {{ $single_product->product_category == 'Shrugs' ? 'selected' : '' }} >Shrugs</option>
                                    <option value="Gowns" {{ $single_product->product_category == 'Gowns' ? 'selected' : '' }} >Gowns</option>
                                    <option value="Salwar Suit (3 PCS)" {{ $single_product->product_category == 'Salwar Suit (3 PCS)' ? 'selected' : '' }} >Salwar Suit (3 PCS)</option>
                                    <option value="Kaptan Dresses" {{ $single_product->product_category == 'Kaptan Dresses' ? 'selected' : '' }} >Kaptan Dresses</option>
                                    <option value="Lingeries" {{ $single_product->product_category == 'Lingeries' ? 'selected' : '' }} >Lingeries</option>
                                    <option value="Casual Shoes" {{ $single_product->product_category == 'Casual Shoes' ? 'selected' : '' }} >Casual Shoes</option>
                                    <option value="Formal Shoes" {{ $single_product->product_category == 'Formal Shoes' ? 'selected' : '' }} >Formal Shoes</option>

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
                                    
                                    <option value="Blue 40" {{ $single_product->product_brand == 'Blue 40' ? 'selected' : '' }} >Blue 40</option>
                                    <option value="Expert Items" {{ $single_product->product_brand == 'Expert Items' ? 'selected' : '' }} >Expert Items</option>

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
                                    
                                    <option value="Color & Size" {{ $single_product->product_unit == 'Color & Size' ? 'selected' : '' }} >Color & Size</option>
                                    <option value="Color" {{ $single_product->product_unit == 'Color' ? 'selected' : '' }} >Color</option>
                                    <option value="Size" {{ $single_product->product_unit == 'Size' ? 'selected' : '' }} >Size</option>
                                    <option value="Pc(s)" {{ $single_product->product_unit == 'Pc(s)' ? 'selected' : '' }}>Pc(s)</option>

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
                                <select name="status" class="form-select form-control" aria-label="Default select example">
                                    
                                    <option value="0" {{ $single_product->product_status == '0' ? 'selected' : '' }} >In Active</option>
                                    <option value="1" {{ $single_product->product_status == '1' ? 'selected' : '' }} >Active</option>

                                </select>
                            </div>
                            @error('status')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group mt-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="form-title form-control-label"><i class="fas fa-align-justify"></i> Product Description</label>
                                <textarea type="text" name="product_description" value="{{ old('product_description') ?? $single_product->product_description }}" class="form-control" name="summernote" id="summernote"></textarea>  
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
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
           
        </div>
    </div>
@endsection