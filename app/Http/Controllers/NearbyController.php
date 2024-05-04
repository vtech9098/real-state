<?php

namespace App\Http\Controllers;

use App\Models\Near_by;
use Illuminate\Http\Request;

class NearbyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('.admin.near-by.nearby');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $near_by = new Near_by;
        $near_by->name = $request->input('name');
        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $near_by->icon = $filename;
        }
        if($request->hasfile('image'))
        {
            $files = $request->file('image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $near_by->image = $filenames;
        }
        $near_by->save();
        return redirect()->back()->with('status', 'Aminities Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $near_by = Near_by::all();
        return view('admin.near-by.nearbyshow', compact('near_by'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $neareEdit = Near_by::find($id);
        return view('admin.near-by.nearbyedit', compact('neareEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $updateNearby = Near_by::findOrFail($id);
        $updateNearby->name = $request->input('name');
        if($request->hasfile('icon'))
        {
            $fileupdate = $request->file('icon');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time().'.'.$extensionupdate;
            $fileupdate->move('uploads/aminitie/', $filenameupdate);
            $updateNearby->icon = $filenameupdate;
        }
        if($request->hasfile('image'))
        {
            $files2 = $request->file('image');
            $extensions2 = $files2->getClientOriginalExtension();
            $filenames2 = time().'.'.$extensions2;
            $files2->move('uploads/aminitie/', $filenames2);
            $updateNearby->image = $filenames2;
        }
        $updateNearby->save();
        return redirect()->route('nearby.show.page')->with('success','Near By Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Near_by::find($id)->delete();
        return redirect()->route('nearby.show.page')->with('success','Near By Deleted Successfully');
    }
}
