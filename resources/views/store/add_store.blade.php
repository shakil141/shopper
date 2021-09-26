@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Edit Store</h2>
        </div>
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Customer list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-header card-block">
            <form action="{{route('stores.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-md-6"><br>
                        <label for="store_name" class="form-title form-control-label">Store Name</label>
                        <input name="store_name" type="text" id="store_name" placeholder="Store Name" class="form-control @error('store_name') is-invalid @enderror" value="{{old('store_name')}}">
                        @error('store_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="store_address" class="form-title form-control-label">Store address</label>
                        <input name="store_address" type="text" id="store_address" placeholder="Store address" class="form-control @error('store_address') is-invalid @enderror" value="{{old('store_address')}}">
                        @error('store_address')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="contact_person" class="form-title form-control-label">Contact person</label>
                        <input name="contact_person" type="text" id="contact_person" placeholder="Store contact_person" class="form-control @error('contact_person') is-invalid @enderror" value="{{old('contact_person')}}">
                        @error('contact_person')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="contact_no" class="form-title form-control-label">Contact No</label>
                        <input name="contact_no" type="text" id="contact_no" placeholder=" contact no" class="form-control @error('contact_no') is-invalid @enderror" value="{{old('contact_no')}}">
                        @error('contact_no')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-12"><br>
                        <label for="weekend" class="form-title form-control-label">Weekend</label><br>
                        <label><input type="checkbox" name="weekend[]" value="saturday" id=""> Saturday &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="sunday" id=""> Sunday  &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="monday" id=""> monday  &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="tuesday" id=""> Tuesday  &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="wednessday" id=""> wednessday  &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="thursday" id=""> Thursday  &nbsp;</label>
                        <label><input type="checkbox" name="weekend[]" value="friday" id=""> Friday  &nbsp;</label>
                         @error('weekend')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="open_hour" class="form-title form-control-label">Open Hour</label>
                        <input name="open_hour" type="time" id="open_hour" class="form-control @error('open_hour') is-invalid @enderror" value="{{old('open_hour')}}">
                        @error('open_hour')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
                    <div class="col-md-6"><br>
                        <label for="close_hour" class="form-title form-control-label">Closed Hour</label>
                        <input name="close_hour" type="time" id="close_hour" class="form-control @error('close_hour') is-invalid @enderror" value="{{old('close_hour')}}">
                        @error('close_hour')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div><br>
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
