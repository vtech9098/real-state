<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social_link;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.social_link.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.social_link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'url' => 'required',


        ]);
        $social_link = new Social_link();
        $social_link->url = $request->url;
        $social_link->share_url = $request->share_url;

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/social/', $filename);
            $social_link->icon = $filename;
        }
        $social_link->save();
        return redirect()->route('admin.social_link.show')->with('success', 'Social Link Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $social_link = Social_link::all();
        return view('admin.social_link.show', compact('social_link'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $social_link = Social_link::find($id);
        return view('admin.social_link.edit', compact('social_link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //


        $id = $request->input('id');
        $social_link = Social_link::findOrFail($id);
        $social_link->url = $request->input('url');
        $social_link->share_url = $request->input('share_url');

        if ($request->hasfile('icon')) {
            $fileupdate = $request->file('icon');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time() . '.' . $extensionupdate;
            $fileupdate->move('uploads/social_link/', $filenameupdate);
            $social_link->icon = $filenameupdate;
        }
        $social_link->update();
        return redirect()->route('admin.social_link.show')->with('success', 'Social Link Updated Successfully');

        // $input = $request->all();
        // $file = $request->file('icon');
        // $fileName = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(base_path('public/uploads/social_link'), $fileName);
        // $input['icon'] = $fileName;
        // unset($input["_token"]);

        // Social_link::where("id")->update($input);
        // return redirect()->route('admin.social_link.show')->with('success', 'Social Link Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Social_link::find($id)->delete();
        return redirect()->route('admin.social_link.show')->with('success', 'Social Link Deleted Successfully');
    }
}