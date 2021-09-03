@extends('master')

@section('title','All-Product')

@section('content')
    <div class="container-fluid">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>Product List</h2>
                </div>
                <a href="{{ route('product.create') }}">
                    <button type="button" class="btn btn-primary btn-sm text-white">Add Product</button>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
               @include('backend_partials.toast')

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="background: #3498db">SL No</th>
                            <th scope="col" style="background: #3498db">Product_Type</th>
                            <th scope="col" style="background: #3498db">Product_Store</th>
                            <th scope="col" style="background: #3498db">Product_Special_Search</th>
                            <th scope="col" style="background: #3498db">Product_Name</th>
                            <th scope="col" style="background: #3498db">Product_Slug</th>
                            <th scope="col" style="background: #3498db">Product_Category</th>
                            <th scope="col" style="background: #3498db">Product_Sub_Category</th>
                            <th scope="col" style="background: #3498db">Product_Brand</th>
                            <th scope="col" style="background: #3498db">Product_Purchase_Price</th>
                            <th scope="col" style="background: #3498db">Product_Sale_Price</th>
                            <th scope="col" style="background: #3498db">Product_Unit</th>
                            <th scope="col" style="background: #3498db">Product_Tag</th>
                            <th scope="col" style="background: #3498db">Product_Status</th>
                            <th scope="col" style="background: #3498db">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_products as $product)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $product->product_type }} </td>
                                <td> {{ $product->product_store }} </td>
                                <td> {{ $product->product_special_search }} </td>
                                <td> {{ $product->product_name }} </td>
                                <td> {{ $product->product_slug }} </td>
                                <td> {{ $product->product_category }} </td>
                                <td> {{ $product->product_sub_category }} </td>
                                <td> {{ $product->product_brand }} </td>
                                <td> {{ $product->product_purchase_price }} </td>
                                <td> {{ $product->product_sale_price }} </td>
                                <td> {{ $product->product_unit }} </td>
                                <td> {{ $product->product_tag }} </td>
                                <td> {{ $product->status }} </td>
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
                <div class="d-flex justify-content-center">
                    {{ $all_products->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection
