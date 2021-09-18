@extends('master')

@section('title','Role | Blue 40')

@section('content')
    <div class="container-fluid">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>Role List</h2>
                </div>

                <button type="button" class="btn btn-primary add_user_btn text-white"  data-toggle="modal" data-target="#exampleModalLong">Add New Role</button>

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

                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" style="background: #3498db">SL No</th>
                            <th scope="col" style="background: #3498db">Role Name</th>
                            <th scope="col" style="background: #3498db">Display Email</th>
                            <th scope="col" style="background: #3498db">Description</th>
                            <th scope="col" style="background: #3498db">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_role as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->role_name }}</td>
                                <td>{{ $role->role_display_person }}</td>
                                <td>{{ $role->description }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $all_role->links() }}
                </div>
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
                <form action="{{ route('role.store')}}" method="POST">
                    @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputRoleName" style="font-weight:600">Role Name</label>
                                <input name="role_name" type="text" class="form-control" id="exampleInputRoleName">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputRoleDisplay" style="font-weight:600">Role Display Person</label>
                                <input name="role_display_person" type="text" class="form-control" id="exampleInputRoleDisplay">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDescription" style="font-weight:600">Description</label>
                                <textarea name="description" class="form-control" id="exampleInputDescription" cols="20" rows="5"></textarea>
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

