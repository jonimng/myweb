<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoices;
class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoices::all();
        return view('invoices.index',['invoices'=> $invoices]);
    }


    public function store(Request $request)
    {
        Invoices::create($request->all());

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $invoice = Invoices::find($id);
       // return $id;
        return view('invoices.show',['invoice'=> $invoice]);
        //return view('admin.users.show',compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $invoice = Invoices::findOrFail($request->invoice_id);
        
        $invoice->update($request->all());
        
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $invoice = Invoices::findOrFail($request->invoice_id);
        
        $invoice->delete();
        
        return back();
    }
}

