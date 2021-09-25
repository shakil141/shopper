<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::get();
        return view('store.list_store',[
            'stores'=>$stores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.add_store');
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
            'store_name' => 'required',
            'contact_no' => 'required',
            'weekend' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'status' => 'required',
        ]);
        $stores = new Store;
        $stores->store_name = $request->store_name;
        $stores->store_address = $request->store_address;
        $stores->contact_person = $request->contact_person;
        $stores->contact_no = $request->contact_no;
       $stores->weekend = json_encode($request->weekend);
       $stores->open_hour = $request->open_hour;
       $stores->close_hour = $request->close_hour;
        $stores->status = $request->status;
        $stores->save();
        Session()->flash('alert-success','Store Added Successfully');
        return redirect()->route('stores.index');

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
        $store = Store::findOrFail($id);
        return view('store.edit_store',[
            'store' => $store
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
        $stores = Store::findOrFail($id);
        $stores->store_name = $request->store_name;
        $stores->store_address = $request->store_address;
        $stores->contact_person = $request->contact_person;
        $stores->contact_no = $request->contact_no;
        $stores->weekend = json_encode($request->weekend);
        $stores->open_hour = $request->open_hour;
        $stores->close_hour = $request->close_hour;
        $stores->status = $request->status;
        $stores->update();
        Session()->flash('alert-success','Store Update Successfully');
        return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::findOrFail($id)->delete();
        Session()->flash('alert-success','Store Delete Successfully');
        return redirect()->route('stores.index');
    }
}
