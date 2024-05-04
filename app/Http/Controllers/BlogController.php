<?php

namespace App\Http\Controllers;

use App\Models\Blogcategory;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.blog');
    }
    // blog categaries
    public function blogCategaries()
    {
        return view('admin.blog.categaries');
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
        // print_r($request->all());exit;
        $request->validate([
            'name' => 'required', 
        ]);
        $catstore = new Blogcategory;
        $catstore->name = $request->input('name');
        $catstore->slug = $request->input('slug');
        $catstore->description = $request->input('description');

        $catstore->save();
        return redirect()->back()->with('success', 'Blog Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $showCat = Blogcategory::all();
        return view('admin.blog.categariesshow', compact('showCat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catEdit = Blogcategory::find($id);
        return view('admin.blog.categariesedit', compact('catEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $catupdate = Blogcategory::findOrFail($id);
        $catupdate->name = $request->input('name');
        $catupdate->slug = $request->input('slug');
        $catupdate->description = $request->input('description');
        $catupdate->save();
        return redirect()->route('blog.show.page')->with('success','Near By Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blogcategory::find($id)->delete();
        return redirect()->back()->with('success', 'Blog Category Deleted Successfully');
    }

    // E########################
    public function blogstore(Request $request)
    {
        // print_r($request->all());exit;
        $blogstore = new Blog;
        $blogstore->title = $request->input('title');
        $blogstore->slug = $request->input('slug');
        $blogstore->short_description = $request->input('short_description');;
        $blogstore->long_description = $request->input('long_description');
        $blogstore->category = $request->input('category');
        $blogstore->tags = $request->input('tags');
        $blogstore->seo_title = $request->input('seo_title');
        $blogstore->seo_description = $request->input('seo_description');
        $blogstore->seo_image = $request->input('seo_image');
        $blogstore->image = $request->input('image');
        $blogstore->seo_keyword = $request->input('seo_keyword');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $blogstore->image = $filename;
        }
        if($request->hasfile('seo_image'))
        {
            $files = $request->file('seo_image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $blogstore->seo_image = $filenames;
        }
        $blogstore->save();
        return redirect()->back()->with('status', 'Aminities Added Successfully');
        
    }


    // blog tag
    public function blogTags()
    {
        return view('admin.blog.tag');
    }
}
