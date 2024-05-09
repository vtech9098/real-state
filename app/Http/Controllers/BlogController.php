<?php

namespace App\Http\Controllers;

use App\Models\Blogcategory;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcat=Blogcategory::all();
        $tag = Tag::all();
        return view('admin.blog.blog',compact('blogcat','tag'));
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
        $catupdate->update();
        return redirect()->route('blog.show.page')->with('success','Blog Categories Updated Successfully');
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
        $blogstore->category = implode(",",$request->input('category'));
        $blogstore->tags = implode(",",$request->input('tags'));
        $blogstore->seo_title = $request->input('seo_title');
        $blogstore->seo_description = $request->input('seo_description');
        $blogstore->seo_keyword = $request->input('seo_keyword');
        // $blogstore->image = $request->input('image');
        // $blogstore->seo_image = $request->input('seo_image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'_icon.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $blogstore->image = $filename;
        }
        if($request->hasfile('seo_image'))
        {
            $files = $request->file('seo_image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'_image.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $blogstore->seo_image = $filenames;
        }
        $blogstore->save();
        return redirect()->back()->with('status', 'Blog Added Successfully');
        
    }
    // blog show controller
    public function blogShow()
    {
        $blogShow = Blog::select("*",DB::raw('(SELECT GROUP_CONCAT(name) FROM `blog-category` where  FIND_IN_SET (id,blogs.category)) as category_name'),DB::raw('(SELECT GROUP_CONCAT(name) FROM `tag` where  FIND_IN_SET (id,blogs.tags)) as tag_name'))->get();
        return view('admin.blog.blogshow', compact('blogShow'));
    }
    // blog edit controller
    public function blogEdit(string $id)
    {
        $blogEdit = Blog::find($id);
        $blogcat=Blogcategory::all();
        $tag = Tag::all();
        return view('admin.blog.blogedit', compact('blogEdit','blogcat','tag'));
    }
    // blog update controller
    public function blogUpdate(Request $request)
    {
        $idupdate = $request->input('id');
        $blogupdate = Blog::findOrFail($idupdate);
        $blogupdate->title = $request->input('title');
        $blogupdate->slug = $request->input('slug');
        $blogupdate->short_description = $request->input('short_description');
        $blogupdate->long_description = $request->input('long_description');
        $blogupdate->category = implode(",",$request->input('category'));
        $blogupdate->tags = implode(",",$request->input('tags'));
        $blogupdate->seo_title = $request->input('seo_title');
        $blogupdate->seo_description = $request->input('seo_description');
        $blogupdate->seo_keyword = $request->input('seo_keyword');
        // $blogupdate->image = $request->input('image');
        // $blogupdate->seo_image = $request->input('seo_image');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'_icon.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $blogupdate->image = $filename;
        }
        if($request->hasfile('seo_image'))
        {
            $files = $request->file('seo_image');
            $extensions = $files->getClientOriginalExtension();
            $filenames = time().'_image.'.$extensions;
            $files->move('uploads/aminitie/', $filenames);
            $blogupdate->seo_image = $filenames;
        }
        $blogupdate->update();
        return redirect()->route('blog.select.page')->with('success','blog Updated Successfully');
    }
    // blog delete controller
    public function blogDestroy(string $deleteid)
    {
        Blog::find($deleteid)->delete();
        return redirect()->back()->with('success', 'Blog Category Deleted Successfully');
    }


    // blog tag
    public function blogTags()
    {
        return view('admin.blog.tag');

    }
    // blog tag store
    public function tagStore(Request $request)
    {
        // print_r($request->all());exit;
        $request->validate([
            'name' => 'required', 
        ]);
        $tagstore = new Tag;
        $tagstore->name = $request->input('name');
        $tagstore->slug = $request->input('slug');
        $tagstore->description = $request->input('description');

        $tagstore->save();
        return redirect()->back()->with('success', 'Tag Added Successfully');
    }
    // blog tag show
    public function tagShow()
    {
        $tagShow = Tag::all();
        return view('admin.blog.tagshow', compact('tagShow'));
    }
    // blog tag edit 
    public function tagEdit(string $id)
    {
        $TagEdit = Tag::find($id);
        return view('admin.blog.tagedit', compact('TagEdit'));
    }
    // blog tag update
    public function tagUpdate(Request $request)
    {
        $id = $request->input('id');
        $tagupdate = Tag::findOrFail($id);
        $tagupdate->name = $request->input('name');
        $tagupdate->slug = $request->input('slug');
        $tagupdate->description = $request->input('description');
        $tagupdate->update();
        return redirect()->route('tag.show.page')->with('success','Tag Updated Successfully');
    }
    // blog tag delete
    public function tagDestroy(string $deletetagid)
    {
        Tag::find($deletetagid)->delete();
        return redirect()->back()->with('success', 'Blog Category Deleted Successfully');
    }
}
