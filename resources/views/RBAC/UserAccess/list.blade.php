@extends('master')

@section('title','Role | Blue 40')

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col-12 p-5">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>User Access List</h2>
                </div>

                <button type="button" class="btn btn-primary add_user_btn text-white"  data-toggle="modal" data-target="#exampleModalLong">Add New User Role</button>

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
    <table id="VisitorDt" class="table table-striped  table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr class="text-center">
          <th scope="col" style="background: #3498db">NO</th>
          <th scope="col" style="background: #3498db">User Email</th>
          <th scope="col" style="background: #3498db">Role Name</th>
          <th scope="col" style="background: #3498db">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user_access as $user_item)
            <tr class="text-center">
                <td >{{ $loop->iteration }}</td>
                <td>{{ $user_item->user_email }}</td>
                <td><span class="role_btn">{{ $user_item->role_name }}</span></td>
                <td>
                    <form action="{{ route('user_access.destroy',['user_access'=>$user_item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are You Sure!')"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>

    </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header model-heading-bg">
                    <h5 style="font-weight:bold" class="modal-title" id="exampleModalLongTitle">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form action="{{ route('user_access.store')}}" method="POST">
                    @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputUserEmail" style="font-weight:600">User Email</label>
                                <select name="user_email" id="exampleInputUserEmail" class="custom-select">
                                    <option value="">Select User Email</option>
                                    @foreach ($user as  $user_item)
                                        <option  value="{{ $user_item->user_email}}">{{ $user_item->user_email}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRoleName" style="font-weight:600">User Role</label>
                                <select name="role_name" id="exampleInputRoleName" class="custom-select">
                                    <option value="" selected disabled>select</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Suppiler">Suppiler</option>
                                    <option value="Delivary Man">Delivary Man</option>
                                    <option value="Packaging">Packaging</option>
                                    <option value="Merchant">Merchant</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input  type="submit" class="btn btn-primary text-white" id="formSubmit" value="Submit">
                              </div>
                        </div>
                </form>
            </div>
        </div>
    </div>


@endsection

