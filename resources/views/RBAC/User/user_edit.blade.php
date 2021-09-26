@extends('master')

@section('title','User | Blue 40')

@section('content')
    <div class="container-fluid">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>User Item Edit </h2>
                </div>
                <a href="{{ route('user.index') }}" class="btn  btn-success">User List</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            @include('backend_partials.toast')
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="modal-body">
                            <form action="{{ route('user.update', ['user' => $single_user->id] )}}" method="POST">
                                @csrf
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="exampleInputFirstName" class="strong">First Name</label>
                                        <input name="first_name" type="text" value="{{ old('first_name') ?? $single_user->first_name  }}" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp">


                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputLastName">Last Name</label>
                                        <input name="last_name" value="{{ old('last_name') ?? $single_user->last_name }}" type="text" class="form-control" id="exampleInputLastName">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUserName">User Name</label>
                                        <input name="user_name" value="{{ old('user_name') ?? $single_user->user_name }}" type="text" class="form-control" id="exampleInputUserName">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPhoneNumber">Phone Number</label>
                                        <input name="phone_number" value="{{ old('phone_number') ?? $single_user->phone_number }}" type="number" class="form-control" id="exampleInputPhoneNumber">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input name="user_email" value="{{ old('user_email') ?? $single_user->user_email }}" type="email" class="form-control" id="exampleInputEmail">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword">Confirm Password</label>
                                        <input name="confirm_password" type="password" class="form-control" id="exampleInputPassword">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputStatus">Status</label>
                                        <select name="status" name="" id="exampleInputStatus" class="form-control">

                                            <option value="0" {{ $single_user->status == 'InActive' ? 'selected' : '' }}>Inactive</option>
                                            <option value="1" {{ $single_user->status == 'Active' ? 'selected' : '' }}>active</option>
                                        </select>
                                    </div>
                                        <label for="">Store Access</label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="store[]" type="checkbox" value="Blue 40 "{{ $single_user->store == 'Blue 40' ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Blue 40
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" name="store[]" type="checkbox" value="Red In " {{ $single_user->store == 'Red In' ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Red In
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" name="store[]" type="checkbox" value="BLUE40 Ready Stock " {{ $single_user->store == 'BLUE40 Ready Stock' ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          BLUE40 Ready Stock
                                        </label>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input  type="submit" class="btn btn-primary " id="formSubmit" value="Submit">
                                      </div>
                                    </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>




@endsection

