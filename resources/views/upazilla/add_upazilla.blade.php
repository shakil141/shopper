@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Add New Upazilla</h2>
        </div>
        <a href="{{route('upzillas.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Upazilla list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-body card-block">
            <form action="{{route('upzillas.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="upzilla_name" class="form-title form-control-label">Upazilla</label>
                            <input type="text" name="upzilla_name" class="form-control @error('upzilla_name') is-invalid @enderror" id="upzilla_name" value="{{old('upzilla_name')}}" placeholder="Upazilla Name">
                            @error('upzilla_name')
                                <div class="alert text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="status" class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1">Active</option>
                                <option value="0">Inacive</option>
                            </select>
                            @error('status')
                                <div class="alert text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">District Name</label>
                            <select name="district_id" class="form-select form-control @error('district_id') is-invalid @enderror" aria-label="Default select example">
                                <option value="">Selected</option>
                                @foreach ($districts as $item)
                                    <option value="{{$item->id}}">{{$item->district_name}}</option>
                                @endforeach
                            </select>
                            @error('district_id')
                                <div class="alert text-danger">{{$message}}</div>
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