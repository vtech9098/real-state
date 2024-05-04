<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categaries.categaries');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        //  print_r($request->all());exit;
        $request->validate([
        'name' => 'required', 
    ]);
    
        $aminities = new Category;
        $aminities->name = $request->input('name');
        $aminities->slug = $request->input('slug');
        $aminities->description = $request->input('description');
        $aminities->on_home = $request->input('on_home');
        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $aminities->icon = $filename;
        }
        if($request->hasfile('image'))
        {
            $files = $request->file('image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $aminities->image = $filenames;
        }
        $aminities->save();
        return redirect()->back()->with('status', 'Categories Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $showCategaries = Category::all();
        return view('admin.categaries.catshow', compact('showCategaries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editCat = Category::find($id);
        return view('admin.categaries.editcat', compact('editCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $updateCat = Category::findOrFail($id);
        $updateCat->name = $request->input('name');
        $updateCat->slug = $request->input('slug');
        $updateCat->description = $request->input('description');
        $updateCat->on_home = $request->input('on_home');
        if($request->hasfile('icon'))
        {
            $fileupdate = $request->file('icon');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time().'.'.$extensionupdate;
            $fileupdate->move('uploads/aminitie/', $filenameupdate);
            $updateCat->icon = $filenameupdate;
        }
        if($request->hasfile('image'))
        {
            $files2 = $request->file('image');
            $extensions2 = $files2->getClientOriginalExtension();
            $filenames2 = time().'.'.$extensions2;
            $files2->move('uploads/aminitie/', $filenames2);
            $updateCat->image = $filenames2;
        }
        $updateCat->update();
        return redirect()->route('categaries.show.page')->with('success','Categories Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('categaries.show.page')->with('success','Categories Deleted Successfully');
    }
}
