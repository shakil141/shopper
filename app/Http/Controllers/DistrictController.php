<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\division;
use App\Models\district;
class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = district::paginate(5);
        return view('district.list_district',[
            'districts' => $districts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = division::get();
        return view('district.add_district',[
            'divisions' => $divisions
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
            'district_name' => 'required|unique:districts',
            'status' => 'required',
            'division_id' => 'required',
        ]);
        $districts = new district(); 
        $districts->district_name = $request->district_name;
        $districts->status = $request->status;
        $districts->division_id = $request->division_id;
        $districts->save();
        Session()->flash('alert-success','District Added Successfully');
        return redirect()->route('districts.index');
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
        $district = district::findOrFail($id);
        $divisions = division::get();
        return view('district.edit_district',[
            'district' => $district,
            'divisions' => $divisions
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        district::findOrFail($id)->delete();
        Session()->flash('alert-danger','District Delete Successfully');
        return redirect()->route('districts.index');
    }
}
