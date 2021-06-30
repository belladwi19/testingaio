<?php

namespace App\Http\Controllers;
use App\Models\Services;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('admin/services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::all();
        return view('admin/services_add', compact('services'));
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
            'title' => 'required' ,
            'image' => 'required|max:2048' ,
            'description' => 'required' ,
        ]);
        
        $image = $request->file('image');
        $form_data = array(
            'title'      => $request->title,
            'image'     => $request->image,
            'description'   => $request->description,
        );

        $services = Services::create($form_data);
        return redirect()->route('services.index');
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
        $services = Services::findOrFail($id);
        return view('admin/services_edit', compact('services'));
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
        $request->validate([
            'title' => 'required' ,
            'image' => 'required|max:2048' ,
            'description' => 'required' ,
        ]);

        Services::findOrFail($id)->update([
            'title'      => $request->title,
            'image'     => $request->image,
            'description'   => $request->description,
        ]);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::findOrFail($id)->delete();
        return redirect()->back();
    }
}
