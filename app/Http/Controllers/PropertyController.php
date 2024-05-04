<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertys;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.property.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'type' => 'required',
        //     'description' => 'required',
        //     'slug' => 'required',
        //     'main_image' => 'required',
        //     'country' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'latitude' => 'required',
        //     'longitude' => 'required',
        //     'other_images' => 'required',
        //     'no_of_bedrooms' => 'required',
        //     'no_of_bathrooms' => 'required',
        //     'property_location' => 'required',
        //     'no_of_floors' => 'required',
        //     'facilities' => 'required',
        //     'features' => 'required',
        //     'seo_title' => 'required',
        //     'seo_description' => 'required',
        //     'seo_image' => 'required',
        //     'categories_ids' => 'required',
        //     'unique_id' => 'required',
        //     'project_id' => 'required',
        // ]);

        Propertys::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'is_featured' => $request->input('is_featured'),
            'slug' => $request->input('slug'),
            'main_image' => $request->file('main_image'),
            'other_images' => $request->file('other_images'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'property_location' => $request->input('property_location'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'no_of_bedrooms' => $request->input('no_of_bedrooms'),
            'no_of_bathrooms' => $request->input('no_of_bathrooms'),
            'no_of_floors' => $request->input('no_of_floors'),
            'square_meter' => $request->input('square_meter'),
            'price' => $request->input('price'),
            'facilities' => $request->input('facilities'),
            'features' => $request->input('features'),
            'seo_title' => $request->input('seo_title'),
            'seo_image' => $request->file('seo_image'),
            'seo_description' => $request->input('seo_description'),
            'category_ids' => $request->input('category_ids'),
            'status' => $request->input('status'),
            'unique_id' => $request->input('unique_id'),
            'project_id' => $request->input('project_id'),
        ]);

        return redirect()->route("admin.property.show")->with("success", "Property created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $properties = Propertys::all();

        return view("admin.property.show", compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $properties = Propertys::find($id);

        return view("admin.property.edit", compact('properties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //


        $input = $request->all();
        $file = $request->file('main_image');
        $input = $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(base_path('assets/upload/property'), $filename);
        $input['main_image'] = $filename;
        unset($input["_token"]);

        Propertys::where("id", 1)->update($input);
        return redirect()->route('admin.property.show')->with('success', 'Property created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
