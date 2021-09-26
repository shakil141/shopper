@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Supplier List</h5>
    </div>
    <a href="{{route('suppliers.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Supplier</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Supplier Name</th>
                <th scope="col">Supplier code</th>
                <th scope="col">Contact No</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($suppliers as $supplier)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$supplier->supplier_name}}</td>
                <td>{{$supplier->supplier_code}}</td>
                <td>{{$supplier->phone_no}}</td>
                <td>{{$supplier->address}}</td>
                <td>{{$supplier->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('suppliers.destroy',['supplier'=>$supplier->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('suppliers.edit',['supplier'=>$supplier->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
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