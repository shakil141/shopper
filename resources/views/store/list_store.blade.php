@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Stores List</h5>
    </div>
    <a href="{{route('stores.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Stores</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Store Name</th>
                <th scope="col">Store address	</th>
                <th scope="col">Contact person</th>
                <th scope="col">Contact no</th>
                <th scope="col">Weekend</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($stores as $store)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$store->store_name}}</td>
                <td>{{$store->store_address}}</td>
                <td>{{$store->contact_person}}</td>
                <td>{{$store->contact_no}}</td>
                <td>{{$store->weekend}}</td>
                <td>{{$store->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('stores.destroy',['store'=>$store->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('stores.edit',['store'=>$store->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    {{-- <div>{{$stores->links()}}</div> --}}
    <div class="text-center">
        
    </div>
</div>
@endsection