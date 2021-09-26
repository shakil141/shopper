@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Update Customer</h2>
        </div>
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Customer list</button>
        </a>
    </div>
    <div class="card">
        <div class="card-body card-block">
            <form action="{{route('customers.update',['customer'=>$customer->id])}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="customer_name" class="form-title form-control-label">Customer Name</label>
                        <input name="customer_name" type="text" id="customer_name" placeholder="Customer Name" class="form-control @error('customer_name') is-invalid @enderror" value="{{$customer->customer_name ?? old('customer_name')}}">
                        @error('customer_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="customer_phone" class="form-title form-control-label">Customer Phone</label>
                        <input name="customer_phone" type="number" id="customer_phone" placeholder="Customer Phone" class="form-control @error('customer_phone') is-invalid @enderror" value="{{ $customer->customer_phone ?? old('customer_phone')}}">
                        @error('customer_phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="customer_alt_phone" class="form-title form-control-label">Customer Alt. Phone</label>
                        <input name="customer_alt_phone" type="text" id="customer_alt_phone" placeholder="Customer Alt. Phone" class="form-control @error('customer_alt_phone') is-invalid @enderror" value="{{ $customer->customer_alt_phone ?? old('customer_alt_phone')}}">
                        @error('customer_alt_phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="customer_email" class="form-title form-control-label">Customer Email</label>
                        <input name="customer_email" type="email" id="customer_email" placeholder="Customer Email" class="form-control" @error('customer_email') is-invalid @enderror value="{{$customer->customer_email ?? old('customer_email')}}">
                        @error('customer_email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Division Name</label>
                            <select name="division_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1">Dhaka</option>
                                <option value="0">Chittagong</option>
                            </select>
                            @error('division_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">District Name</label>
                            <select name="district_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected District</option>
                                <option value="1">Feni</option>
                                <option value="0">Chadpur</option>
                            </select>
                            @error('district_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Upzilla Name</label>
                            <select name="upazilla_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected Upazilla</option>
                                <option value="1">Dhaka</option>
                                <option value="0">Chittagong</option>
                            </select>
                            @error('upazilla_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="home_address" class="form-title form-control-label">Home Address</label>
                        <textarea name="home_address" id="" cols="" rows="" placeholder="Home Address" class="form-control" @error('home_address') is-invalid @enderror value="{{old('home_address')}}"></textarea>
                        @error('home_address')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-6">
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