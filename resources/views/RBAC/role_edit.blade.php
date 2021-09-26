@extends('master')

@section('title','Role | Blue 40')

@section('content')

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

