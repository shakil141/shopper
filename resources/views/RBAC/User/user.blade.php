@extends('master')

@section('title','User | Blue 40')

@section('content')
    <div class="container-fluid">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>User List</h2>
                </div>

                <button type="button" class="btn btn-primary add_user_btn text-white"  data-toggle="modal" data-target="#exampleModalLong">Add New User</button>

            </div>
        </div>
            @if ($errors->any())
                <div class="row">
                    <div class="col-md-8 d-flex justify-content-center">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        <div class="card">
            <div class="card-body">
            @include('backend_partials.toast')

                <table id="VisitorDt" class="table table-striped  table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" style="background: #3498db">SL No</th>
                            <th scope="col" style="background: #3498db">Profile Image</th>
                            <th scope="col" style="background: #3498db">User Name</th>
                            <th scope="col" style="background: #3498db">User Email</th>
                            <th scope="col" style="background: #3498db">Contact No</th>
                            <th scope="col" style="background: #3498db">Store Access</th>
                            <th scope="col" style="background: #3498db">Status</th>
                            <th scope="col" style="background: #3498db">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user_item)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 100px"><img src="{{asset('userimage/'.$user_item->image)}}" alt="user_img"></td>
                                <td>{{ $user_item->user_name}}</td>
                                <td>{{ $user_item->user_email}}</td>
                                <td>{{ $user_item->phone_number}}</td>
                                <td>{{ $user_item->store }}</td>
                                <td class="status_btn">{{ $user_item->status}}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.edit', ['user' => $user_item->id ]) }}"  class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a  style="margin-left: 8px" href="{{ url('/status',$user_item->id) }}" class="btn btn-success btn-sm"><i class="fas fa-sync-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $user->links() }}
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header model-heading-bg">
                    <h5 style="font-weight:bold" class="modal-title" id="exampleModalLongTitle">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            <form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="profile_img_wrapper">
                        <label  class="font" style="color: var(--blue);">Profile Image</label>
                        <div class="d-flex justify-content-center">
                            <div class="w-20 h-20 img-fit">
                                <img src="{{ asset('assets/images/blank.jpg') }}"  alt="profile_img">
                            </div>
                        </div>
                    </div>
                        <input type="file" name="image"  class="mt-3 mb-3" style="color: black;">

                    <div class="form-group">
                        <label for="exampleInputFirstName" class="strong">First Name</label>
                        <input name="first_name" type="text" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp">


                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name</label>
                        <input name="last_name" type="text" class="form-control" id="exampleInputLastName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUserName">User Name</label>
                        <input name="user_name" type="text" class="form-control" id="exampleInputUserName">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input name="phone_number" type="number" class="form-control" id="exampleInputPhoneNumber">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input name="user_email" type="email" class="form-control" id="exampleInputEmail">
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
                            <option value="" selected disabled>Select</option>
                            <option value="0">Inactive</option>
                            <option value="1">active</option>
                        </select>
                    </div>
                        <label for="">Store Access</label>
                    <div class="form-check">
                        <input class="form-check-input" name="store[]" type="checkbox" value="Blue 40" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Blue 40
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="store[]" type="checkbox" value="Red In" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Red In
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="store[]" type="checkbox" value="BLUE40 Ready Stock" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          BLUE40 Ready Stock
                        </label>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input  type="submit" class="btn btn-primary " id="formSubmit" value="Submit">
                      </div>
                    </div>
                </div>
                  </form>
            </div>

        </div>
    </div>


@endsection

