@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Edit Supplier</h2>
        </div>
        <a href="{{route('suppliers.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Supplier list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-header card-block">
            <form action="{{route('suppliers.update',['supplier'=>$supplier->id])}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6"><br>
                        <label for="supplier_name" class="form-title form-control-label">Supplier Name</label>
                        <input name="supplier_name" type="text" id="supplier_name" placeholder="Supplier Name" class="form-control @error('supplier_name') is-invalid @enderror" value="{{$supplier->supplier_name ?? old('supplier_name')}}">
                        @error('supplier_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="supplier_code" class="form-title form-control-label">Supplier code</label>
                        <input name="supplier_code" type="number" id="supplier_code" placeholder="Supplier Code" class="form-control @error('supplier_code') is-invalid @enderror" value="{{$supplier->supplier_code ?? old('supplier_code')}}">
                        @error('supplier_code')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="phone_no" class="form-title form-control-label">Contact No</label>
                        <input name="phone_no" type="number" id="phone_no" placeholder="Contact Person" class="form-control @error('phone_no') is-invalid @enderror" value="{{$supplier->phone_no ?? old('phone_no')}}">
                        @error('phone_no')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="address" class="form-title form-control-label">Address</label>
                        <input name="address" type="text" id="address" placeholder="address" class="form-control @error('address') is-invalid @enderror" value="{{$supplier->address ?? old('address')}}">
                        @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col col-md-6"><br>
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="status" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1">Active</option>
                                <option value="0">Inacive</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start sub-btn">
                    <input type="submit" class="btn btn-sm btn-primary" value="Update">
                </div>
            </form>
        </div>
       
    </div>
</div>
@endsection
