<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Companies::all();
        return view('companies.index',['companies'=> $companies]);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
    {
		Companies::create($request->all());

		return back();

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
        $company = Companies::findOrFail($request->company_id);
        
        $company->update($request->all());
        
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
     	$company = Companies::findOrFail($request->company_id);
        
        $company->delete();
        
        return back();
    }



}
