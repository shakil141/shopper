<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\district;
use App\Models\division;
use App\Models\upzilla;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function menuWiseDivision($division_id){
    //    try{
           $district = district::query()->where('division_id',$division_id)->get();
            return response()->json($district);
            // return response()->json($district,Response::HTTP_OK);
    //    }catch(\Exception $exception){
    //         return response()->json($exception->getMessage(),Response::HTTP_INTERNAL_SERVER_ERROR);
    //    }
    }

    function menuWiseDistrict($district_id){
        $upzilla = upzilla::where('district_id',$district_id)->get();
        return response()->json($upzilla);
    }

    public function index()
    {
        $customers = Customer::get();
        return view('customer.listCustomer',[
            'customers' => $customers
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
        $districts = district::get();
        $upzillas = upzilla::get();
        return view('customer.addCustomer',[
            'divisions' => $divisions,
            'districts' => $districts,
            'upzillas' => $upzillas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customers = new Customer;
        $customers->fill($request->all())->save();
        Session()->flash('alert-success','Customer Added Successfully');
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.editCustomer',[
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->fill($request->all())->update();
        Session()->flash('alert-success','Customer Added Successfully');
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        Session()->flash('alert-danger', 'Customer Delete Successfully');
        return redirect()->route('customers.index');
    }
}
