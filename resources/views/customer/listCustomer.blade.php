@extends('master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Customers List</h5>
    </div>
    <a href="{{route('customers.create')}}">
        <button type="button" class="btn btn-primary btn-xs text-white pull-right mr-4">Add Customer</button>
    </a>
    @include('backend_partials.toast')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Phone</th>
                <th scope="col">Customer Alt. Phone</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$customer->customer_name}}</td>
                <td>{{$customer->customer_phone}}</td>
                <td>{{$customer->customer_alt_phone}}</td>
                <td>{{$customer->customer_email}}</td>
                <td>{{$customer->status}}</td>
                <td style="display: inline-flex">
                    <form action="{{route('customers.destroy',['customer'=>$customer->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are You Delete?')"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('customers.edit',['customer'=>$customer->id])}}" style="margin-left: 5%" class="btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr> 
           @endforeach
        </tbody>
    </table>
    {{-- <div>{{$customers->links()}}</div> --}}
    <div class="text-center">
        
    </div>
</div>
@endsection