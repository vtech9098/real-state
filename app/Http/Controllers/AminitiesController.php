<?php

namespace App\Http\Controllers;
use App\Models\Amenitie;

use Illuminate\Http\Request;

class AminitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.aminities.aminities');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $aminities = new Amenitie;
        $aminities->name = $request->input('name');
        if($request->hasfile('icon_image'))
        {
            $file = $request->file('icon_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'_icon.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $aminities->icon = $filename;
        }
        if($request->hasfile('image'))
        {
            $files = $request->file('image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'_image.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $aminities->image = $filenames;
        }
        $aminities->save();
        return redirect()->back()->with('status', 'Aminities Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $aminities_show = Amenitie::all();
        return view('admin.aminities.aminitiesshow',compact('aminities_show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Amenitie::find($id);
        return view('admin.aminities.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $updateAminities = Amenitie::findOrFail($id);
        $updateAminities->name = $request->input('name');
        if($request->hasfile('icon_image'))
        {
            $fileupdate = $request->file('icon_image');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time().'_icon.'.$extensionupdate;
            $fileupdate->move('uploads/aminitie/', $filenameupdate);
            $updateAminities->icon = $filenameupdate;
        }
        if($request->hasfile('image'))
        {
            $files2 = $request->file('image');
            $extensions2 = $files2->getClientOriginalExtension();
            $filenames2 = time().'_image.'.$extensions2;
            $files2->move('uploads/aminitie/', $filenames2);
            $updateAminities->image = $filenames2;
        }
        $updateAminities->save();
        return redirect()->route('aminities.show.page')->with('success','Aminities Updated Successfully');
 
           
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Amenitie::find($id)->delete();
        return redirect()->route('aminities.show.page')->with('success','Aminities Deleted Successfully');
    }
}