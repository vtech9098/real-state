<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertys;
use App\Models\Amenitie;
use App\Models\Near_by;

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
        $ami = Amenitie::all();
        $near = Near_by::all();
        return view('admin.property.create', compact('ami', 'near'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'other_images' => 'required',
            'no_of_bedrooms' => 'required',
            'no_of_bathrooms' => 'required',
            'no_of_floors' => 'required',
            'property_location' => 'required',
            'facilities' => 'required',
            'features' => 'required',
            'price' => 'required',
            'seo_title' => 'required',
            'seo_description' => 'required',
            'seo_image' => 'required',
            'category_ids' => 'required',
            'unique_id' => 'required',
        ]);
        $property = new Propertys;
        $property->name = $request->input('name');
        $property->type = $request->input('type');
        $property->description = $request->input('description');
        $property->slug = $request->input('slug');
        $property->is_featured = $request->input('is_featured');
        $property->country = $request->input('country');
        $property->state = $request->input('state');
        $property->city = $request->input('city');
        $property->property_location = $request->input('property_location');
        $property->latitude = $request->input('latitude');
        $property->longitude = $request->input('longitude');
        $property->no_of_bedrooms = $request->input('no_of_bedrooms');
        $property->no_of_bathrooms = $request->input('no_of_bathrooms');
        $property->no_of_floors = $request->input('no_of_floors');
        $property->square_meter = $request->input('square_meter');
        $property->price = $request->input('price');
        $property->facilities = $request->input('facilities');
        $property->features = $request->input('features');
        $property->seo_title = $request->input('seo_title');
        $property->seo_description = $request->input('seo_description');
        $property->status = $request->input('status');
        $property->category_ids = $request->input('category_ids');
        $property->unique_id = $request->input('unique_id');

        if ($request->hasfile('main_image')) {
            $fileupdate = $request->file('main_image');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time() . '.' . $extensionupdate;

            $fileupdate->move('uploads/property/', $filenameupdate);
            $property->main_image = $filenameupdate;
        }
        if ($request->hasfile('other_images')) {
            $files2 = $request->file('other_images');
            $extensions2 = $files2->getClientOriginalExtension();
            $filenames2 = time() . '.' . $extensions2;
            $files2->move('uploads/property/', $filenames2);
            $property->other_images = $filenames2;
        }
        if ($request->hasfile('seo_image')) {
            $files3 = $request->file('seo_image');
            $extensions3 = $files3->getClientOriginalExtension();
            $filenames3 = time() . '.' . $extensions3;
            $files3->move('uploads/property/', $filenames3);
            $property->seo_image = $filenames3;
        }
        $property->save();
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
        $ami = Amenitie::all();
        $near = Near_by::all();
        $properties = Propertys::find($id);

        return view("admin.property.edit", compact('properties', 'ami', 'near'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $id = $request->input('id');
        $property = Propertys::findOrFail($id);
        $property->name = $request->input('name');
        $property->type = $request->input('type');
        $property->description = $request->input('description');
        $property->slug = $request->input('slug');
        $property->country = $request->input('country');
        $property->state = $request->input('state');
        $property->city = $request->input('city');

        $property->property_location = $request->input('property_location');

        $property->latitude = $request->input('latitude');
        $property->longitude = $request->input('longitude');
        $property->no_of_bedrooms = $request->input('no_of_bedrooms');
        $property->no_of_bathrooms = $request->input('no_of_bathrooms');
        $property->no_of_floors = $request->input('no_of_floors');
        $property->square_meter = $request->input('square_meter');
        $property->price = $request->input('price');
        $property->facilities = $request->input('facilities');
        $property->features = $request->input('features');
        $property->seo_title = $request->input('seo_title');
        $property->seo_description = $request->input('seo_description');
        $property->status = $request->input('status');
        $property->category_ids = $request->input('category_ids');
        $property->unique_id = $request->input('unique_id');

        if ($request->hasfile('main_image')) {
            $fileupdate = $request->file('main_image');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time() . '.' . $extensionupdate;
            $fileupdate->move('uploads/property/', $filenameupdate);
            $property->main_image = $filenameupdate;
        }
        if ($request->hasfile('other_images')) {
            $files2 = $request->file('other_images');
            $extensions2 = $files2->getClientOriginalExtension();
            $filenames2 = time() . '.' . $extensions2;
            $files2->move('uploads/property/', $filenames2);
            $property->other_images = $filenames2;
        }
        if ($request->hasfile('seo_image')) {
            $files3 = $request->file('seo_image');
            $extensions3 = $files3->getClientOriginalExtension();
            $filenames3 = time() . '.' . $extensions3;
            $files3->move('uploads/property/', $filenames3);
            $property->seo_image = $filenames3;
        }
        $property->update();
        return redirect()->route('admin.property.show')->with('success', 'Property Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Propertys::find($id)->delete();
        return redirect()->route('admin.property.show')->with('success', 'Propertys By Deleted Successfully');
    }
}
