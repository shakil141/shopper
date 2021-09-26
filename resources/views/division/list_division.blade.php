@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Brands List</h5>
    </div>
    <a href="{{route('divisions.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Division</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Division Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($divisions as $division)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$division->division_name}}</td>
                <td>{{$division->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('divisions.destroy',['division'=>$division->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('divisions.edit',['division'=>$division->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    
    <div class="text-center">
        
    </div>
</div>
@endsection