@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Edit District</h2>
        </div>
        <a href="{{route('districts.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">District list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-body card-block">
            <form action="{{route('districts.update',['district'=>$district->id])}}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="district_name" class="form-title form-control-label">District</label>
                            <input type="text" name="district_name" class="form-control @error('district_name') is-invalid @enderror" value="{{$district->district_name ?? old('district_name')}}" id="district_name" placeholder="District Name">
                            @error('division_name')
                                <div class="alert text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="status" class="form-select form-control @error('status') is-invalid @enderror" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1" {{$district->status == 'Active' ? 'selected':''}} >Active</option>
                                <option value="0" {{$district->status == 'InActive' ? 'selected':''}} >Inacive</option>
                            </select>
                            @error('status')
                                <div class="alert text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Division Name</label>
                            <select name="division_id" class="form-select form-control @error('division_id') is-invalid @enderror" aria-label="Default select example">
                                <option value="">Selected</option>
                                @foreach ($divisions as $item)
                                    <option @if ($district->division_id	== $item->id) selected @endif value="{{$item->id}}">{{$item->division_name}}</option>
                                @endforeach
                            </select>
                            @error('division_id')
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