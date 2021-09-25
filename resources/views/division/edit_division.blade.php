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
            <form action="{{route('divisions.update',['division'=>$division->id])}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Division</label>
                            <select name="division_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option {{$division->division_name =='dhaka' ? 'selected':''}} value="dhaka">Dhaka</option>
                                <option {{$division->division_name =='chottogram' ? 'selected':''}} value="chottogram">Chottogram</option>
                                <option {{$division->division_name =='khulna' ? 'selected':''}} value="khulna">Khulna</option>
                                <option {{$division->division_name =='barishal' ? 'selected':''}} value="barishal">Barishal</option>
                                <option {{$division->division_name =='rangpur' ? 'selected':''}} value="rangpur">Rangpur</option>
                                <option {{$division->division_name =='sylhet' ? 'selected':''}} value="sylhet">Sylhet</option>
                                <option {{$division->division_name =='mymensingh' ? 'selected':''}} value="mymensingh">Mymensingh</option>
                            </select>
                            @error('division_name')
                            <div class="alert text-danger">{{$message}}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="status" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1" {{$division->status =='Active'?'selected':''}} >Active</option>
                                <option value="0" {{$division->status =='InActive'?'selected':''}} >InAcive</option>
                            </select>
                            @error('status')
                                <div class="alert text-danger">{{$message}}</div>
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