<?php

namespace App\Http\Controllers;

use App\Http\Model\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::latest()->paginate(5);
        return view('dashboard.customer.index', compact('customers'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , customer $customer)
    {
     $request->validate([
        'nama_fasilitas'=>'required',
        'keterangan'=>'required',
        'image'=>'required'
     ]);  

     customer::create($request->all());
     return redirect()->route('customer.index')->with('Success','Berhasil input');
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
        return view('dashboard.customer.edit');
        
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
    public function destroy($id,customer $customers)
    {
        
        $customers = customer::find($id);
        $customers->delete();
        return redirect('dashboard.customer.index')->with('success', 'Success removed');

    }
}
