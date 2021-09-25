@extends('master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between main-wrapper">
        <div class="panel-heading-table">
            <h2>Add New Customer</h2>
        </div>
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-primary btn-xs text-white">Customer list</button>
        </a>
    </div>
    <div class="card">
        
        <div class="card-body card-block">
            <form action="{{route('customers.store')}}" method="POST" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="customer_name" class="form-title form-control-label">Customer Name</label>
                        <input name="customer_name" type="text" id="customer_name" placeholder="Customer Name" class="form-control @error('customer_name') is-invalid @enderror" value="{{old('customer_name')}}">
                        @error('customer_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="customer_phone" class="form-title form-control-label">Customer Phone</label>
                        <input name="customer_phone" type="number" id="customer_phone" placeholder="Customer Phone" class="form-control @error('customer_phone') is-invalid @enderror" value="{{old('customer_phone')}}">
                        @error('customer_phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6"><br>
                        <label for="customer_alt_phone" class="form-title form-control-label">Customer Alt. Phone</label>
                        <input name="customer_alt_phone" type="text" id="customer_alt_phone" placeholder="Customer Alt. Phone" class="form-control @error('customer_alt_phone') is-invalid @enderror" value="{{old('customer_alt_phone')}}">
                        @error('customer_alt_phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6"><br>
                        <label for="customer_email" class="form-title form-control-label">Customer Email</label>
                        <input name="customer_email" type="email" id="customer_email" placeholder="Customer Email" class="form-control" @error('customer_email') is-invalid @enderror value="{{old('customer_email')}}">
                        @error('customer_email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col col-md-6"><br>
                        <div class="form-group">
                            <label for="division_name" class="form-title form-control-label">Division Name</label>
                            <select name="division_name" class="form-select form-control division_name" id="division_name" aria-label="Default select example">
                                <option value="">Selected</option>
                                @foreach ($divisions as $item)
                                    <option value="{{$item->id}}">{{$item->division_name}}</option>
                                @endforeach
                            </select>
                            @error('division_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6"><br>
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">District Name</label>
                            {{-- <select name="district_name" id="district_name" class="form-select form-control categories" aria-label="Default select example">
                                <option value="">Selected District</option>
                                
                            </select> --}}
                            <div class="district_name"></div>
                            @error('district_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6"><br>
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Upzilla Name</label>
                            {{-- <select name="upazilla_name" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected Upazilla</option>
                            </select> --}}
                            <div class="upazilla_name"></div>
                            @error('upazilla_name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-6"><br>
                        <div class="form-group">
                            <label for="" class="form-title form-control-label">Status</label>
                            <select name="status" class="form-select form-control" aria-label="Default select example">
                                <option value="">Selected</option>
                                <option value="1">Active</option>
                                <option value="0">Inacive</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="home_address" class="form-title form-control-label">Home Address</label>
                        <textarea name="home_address" id="" cols="" rows="" placeholder="Home Address" class="form-control" @error('home_address') is-invalid @enderror value="{{old('home_address')}}"></textarea>
                        @error('home_address')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    //   district name
        $(document).on('change','.division_name',function() {
            let division_id = $(this).val();
            $.ajax({
                url:'/menu-wise-division/'+division_id,
                type:'GET',
                success:function(response) {
                    let categories = "<select class='form-control district_id' name='district_name'>"
                        $.each(response,function(index,value) {
                            categories += `<option value="${value.id}">${value.district_name}</option>`
                        })
                    categories += "</select>";
                    $('.district_name').html('').html(categories);
                },
                error:function(error) {
                    console.log(error)
                }
            });
        });

         //  upzilla name
         $(document).on('change','.district_id',function(){
            let district_id = $(this).val();
            $.ajax({
                url:'/menu-wise-district/'+district_id,
                type:'GET',
                success:function(response){
                    let upzilla = "<select class='form-control' name='upazilla_name'>"
                        $.each(response,function (index,value) {
                            upzilla += `<option value="${value.id}">${value.upzilla_name}</option>`;
                        })
                    upzilla += "</select>";
                    $('.upazilla_name').html('').html(upzilla);
                },
                error:function(error){
                    console.log(error);
                }
            });
        });
        
    });

 

























    //  $(document).ready(function () {
    //         $(document).on('change', '#division_name', function () {
    //             let menuId = $(this).val();
    //             $.ajax({
    //                 url: "/district/" + menuId,
    //                 type: "GET",
    //                 success: function (response) {
    //                     let categories = "<select class='form-control'>";
    //                     $.each(response, function (index, value) {
    //                         categories += `<option value="${value.id}">${value.name}</option>`;
    //                     });
    //                     categories += "</select>";
    //                     $('.categories').html('').html(categories);
    //                 },
    //                 error: function (error) {
    //                     console.log(error)
    //                 }
    //             });
    //         });
    //     });

    // $(document).ready(function(){
    //     $('#division_name').change(function(){
    //         let division_name = $(this).val();
    //         $.ajax({
    //             url : '/district/'+division_name,
    //             type : 'GET',
    //             success : function (response) {
    //                 if(response){
    //                     $('#district_name').empty();
    //                     $('#district_name').append("<option value>Select One</option>");
    //                     $.each(e,function(key,value){
    //                             $('#district_name').append('<option value="'+value.id+'">'+value.subcategory_name+'</option>')
    //                         })
    //                 }else{
    //                     $('#district_name').empty();
    //                 }
    //             }
    //         }); 
    //     });
    // });
</script>