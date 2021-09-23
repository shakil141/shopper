@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Add New Division</h2>
        </div>
        <a href="{{route('divisions.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Division list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-body card-block">
            <form action="{{route('divisions.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="division_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="chottogram">Chottogram</option>
                                <option value="khulna">Khulna</option>
                                <option value="barishal">Barishal</option>
                                <option value="rangpur">Rangpur</option>
                                <option value="sylhet">Sylhet</option>
                                <option value="mymensingh">Mymensingh</option>
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