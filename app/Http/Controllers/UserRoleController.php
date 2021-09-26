<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\UserMail;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Users::paginate();

        return view('RBAC.User.user',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new Users;

        $image = $request->image;

        $imageName = time().'.'.$image->getClientoriginalExtension();

        $request->image->move('userimage', $imageName);

        $user->image = $imageName;

        $user->first_name = $request->first_name;

        $user->last_name = $request->last_name;

        $user->user_name = $request->user_name;

        $user->phone_number = $request->phone_number;

        $user->user_email = $request->user_email;

        $user->password = Hash::make($request->password);

        $user->confirm_password = Hash::make($request->confirm_password);

        $user->store = $request->store;

        $user->status = $request->status;

        $user->save();

        //$users->fill($request->except('_token'))->save();
        Mail::to('fcishakil59@gmail.com')->send(new UserMail());
        $value = "New User Added Successfully";

        $request->session()->flash('alert-success', $value);

        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_user = Users::findOrFail($id);

        return view('RBAC.User.user_edit' , ['single_user' => $single_user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
