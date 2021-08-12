@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Brands List</h5>
    </div>
    <a href="{{route('brands.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Brand</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Contact Person</th>
                <th scope="col">Contact No</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($brands as $brand)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$brand->brand_name}}</td>
                <td>{{$brand->contact_person}}</td>
                <td>{{$brand->contact_no}}</td>
                <td>{{$brand->address}}</td>
                <td>{{$brand->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('brands.destroy',['brand'=>$brand->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('brands.edit',['brand'=>$brand->id])}}" style="margin-left: 2%" class="btn-xs btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    <div>{{$brands->links()}}</div>
    <div class="text-center">
        
    </div>
</div>
@endsection