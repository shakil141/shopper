@extends('master')

@section('title','User | Blue 40')

@section('content')
    <div class="container-fluid">
        <div class="main-wrapper">
            <div class="table_heading_wrapper d-flex justify-content-between">
                <div class="panel-heading-table">
                    <h2>User List</h2>
                </div>

                    <button type="button" class="btn btn-primary btn-xs text-white"  data-toggle="modal" data-target="#exampleModalLong">Add New User</button>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
            @include('backend_partials.toast')

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Product_Type</th>
                            <th scope="col">Product_Store</th>
                            <th scope="col">Product_Special_Search</th>
                            <th scope="col">Product_Name</th>
                            <th scope="col">Product_Slug</th>
                            <th scope="col">Product_Category</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputFirstName">First Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLastName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUserName">User Name</label>
                        <input type="text" class="form-control" id="exampleInputUserName">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputPhoneNumber">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputStatus">Status</label>
                        <select name="" id="exampleInputStatus" class="form-control">
                            <option value="" selected disabled>Select</option>
                            <option value="0">active</option>
                            <option value="1">inactive</option>
                        </select>
                    </div>
                        <label for="">Store Access</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Blue 40
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Red In
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          BLUE40 Ready Stock
                        </label>
                      </div>
                  </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </div>

@endsection

