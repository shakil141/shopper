@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Add New Brand</h2>
        </div>
        <a href="{{route('brands.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Brand list</button>
        </a>
    </div>
    <div class="card">
        {{-- @if ($errors->any())
           <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
            @endforeach   
            </div> 
        @endif --}}
        <div class="card-body card-block">
            <form action="{{route('brands.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="brand_name" class="form-title form-control-label">Brand Name</label>
                        <input name="brand_name" type="text" id="brand_name" placeholder="Brand Name" class="form-control @error('brand_name') is-invalid @enderror" value="{{old('brand_name')}}">
                        @error('brand_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="contact_person" class="form-title form-control-label">Contact Person</label>
                        <input name="contact_person" type="text" id="contact_person" placeholder="Contact Person" class="form-control @error('contact_person') is-invalid @enderror" value="{{old('contact_person')}}">
                        @error('contact_person')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="contact_no" class="form-title form-control-label">Contact No</label>
                        <input name="contact_no" type="text" id="contact_no" placeholder="Contact No" class="form-control @error('contact_no') is-invalid @enderror">
                        @error('contact_no')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <label for="address" class="form-title form-control-label">Address</label>
                        <input name="address" type="text" id="address" placeholder="Address" class="form-control" @error('address') is-invalid @enderror value="{{old('address')}}">
                        @error('address')
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
                    <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                </div>
            </form>
        </div>
       
    </div>
</div>
@endsection