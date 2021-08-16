@extends('master')

@section('title','All-Product')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between main-wrapper">
            <div class="panel-heading-table">
                <h2>Product List</h2>
            </div>
            <a href="{{ route('product.create') }}">
                <button type="button" class="btn btn-primary btn-xs text-white">Add Product</button>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
               @include('backend_partials.toast')

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Product_Type</th>
                            <th scope="col">Product_Store</th>
                            <th scope="col">Product_Special_Search</th>
                            <th scope="col">Product_Name</th>
                            <th scope="col">Product_Slug</th>
                            <th scope="col">Product_Category</th>
                            <th scope="col">Product_Sub_Category</th>
                            <th scope="col">Product_Brand</th>
                            <th scope="col">Product_Purchase_Price</th>
                            <th scope="col">Product_Sale_Price</th>
                            <th scope="col">Product_Unit</th>
                            <th scope="col">Product_Tag</th>
                            <th scope="col">Product_Status</th>
                            <th scope="col">Product_Description</th>
                            <th scope="col">Seo_Friendly_Title</th>
                            <th scope="col">Seo_Friendly_Description</th>
                            <td scope="col">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->product_type }}</td>
                                <td>{{ $product->product_store }}</td>
                                <td>{{ $product->product_special_search }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_slug }}</td>
                                <td>{{ $product->product_category }}</td>
                                <td>{{ $product->product_sub_category }}</td>
                                <td>{{ $product->product_brand }}</td>
                                <td>{{ $product->product_purchase_price }}</td>
                                <td>{{ $product->product_sale_price }}</td>
                                <td>{{ $product->product_unit }}</td>
                                <td>{{ $product->product_tag }}</td>
                                <td>{{ $product->product_status }}</td>
                                <td>{!! $product->product_description !!}</td>
                                <td>{{ $product->seo_friendly_title }}</td>
                                <td>{{ $product->seo_friendly_description }}</td>
                                <td class="d-flex">
                                    <form method="POST" action="{{ route('product.destroy',[ 'product' => $product->id ]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are You Sure!')"  class="btn-sm btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a style="margin-left: 8px"
                                   href="{{ route('product.edit',['product' => $product->id]) }}"
                                   class="btn-sm btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
@endsection