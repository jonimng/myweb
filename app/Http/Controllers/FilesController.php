<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;

class FilesController extends Controller
{
    public function index()
    {
        $files = Files::all();
        return view('files.index',['files'=> $files]);
    }
    

    public function store(Request $request)
    {
        Files::create($request->all());

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
        $file = Files::find($id);
       // return $id;
        return view('files.show',['file'=> $file]);
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
        $file = Files::findOrFail($request->file_id);
        
        $file->update($request->all());
        
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
        $file = Files::findOrFail($request->file_id);
        
        $file->delete();
        
        return back();
    }
}

