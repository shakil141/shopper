@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Districts List</h5>
    </div>
    <a href="{{route('districts.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add District</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">District Name</th>
                <th scope="col">Status</th>
                <th scope="col">Division Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($districts as $district)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$district->district_name}}</td>
                <td>{{$district->status}}</td>
                <td>{{$district->division->division_name}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('districts.destroy',['district'=>$district->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('districts.edit',['district'=>$district->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    {{$districts->links()}}
    
    <div class="text-center">
        
    </div>
</div>
@endsection