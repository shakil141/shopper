@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Districts List</h5>
    </div>
    <a href="{{route('upzillas.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Upazillas</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Upazilla Name</th>
                <th scope="col">Status</th>
                <th scope="col">District Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($upazillas as $upazilla)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$upazilla->upzilla_name}}</td>
                <td>{{$upazilla->status}}</td>
                <td>{{$upazilla->district->district_name}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('upzillas.destroy',['upzilla'=>$upazilla->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('upzillas.edit',['upzilla'=>$upazilla->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    {{$upazillas->links()}}
    
    <div class="text-center">
        
    </div>
</div>
@endsection