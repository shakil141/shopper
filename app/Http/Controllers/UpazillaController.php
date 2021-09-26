<?php

namespace App\Http\Controllers;

use App\Models\district;
use App\Models\division;
use App\Models\upzilla;
use Illuminate\Http\Request;

class UpazillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upazillas = upzilla::paginate(5);
        return view('upazilla.list_upazilla',[
            'upazillas' => $upazillas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = district::get();
        return view('upazilla.add_upazilla',[
            'districts' => $districts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'upzilla_name' => 'required|unique:upzillas',
            'status' => 'required',
            'district_id' => 'required',
        ]);
        $upazillas = new upzilla;
        $upazillas->fill($request->all())->save();
        Session()->flash('alert-success','Upazilla Added Successfully');
        return redirect()->route('upzillas.index');
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
        $upzilla = upzilla::findOrFail($id);
        $districts = district::get();
        return view('upazilla.edit_upazilla',[
            'upzilla' => $upzilla,
            'districts' => $districts,
        ]);
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
        $upzilla = upzilla::findOrFail($id);
        $upzilla->fill($request->all())->update();
        Session()->flash('alert-success','Upzilla Update Successfully');
        return redirect()->route('upzillas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        upzilla::findOrFail($id)->delete();
        Session()->flash('alert-danger','Upzilla Delete Successfully');
        return redirect()->route('upzillas.index');
    }
}
