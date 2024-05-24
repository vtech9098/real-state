<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_description = $request->input('slider_description');
        if($request->hasfile('slider_image'))
        {
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'_icon.'.$extension;
            $file->move('uploads/aminitie/', $filename);
            $slider->slider_image = $filename;
        }
        
        $slider->save();
        return redirect()->back()->with('status', 'slider Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $slider_show = Slider::all();
        return view('admin.slider.slidershow', compact('slider_show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider_edit = Slider::find($id);
        return view('admin.slider.slideredit',compact('slider_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $updateSlider = Slider::findOrFail($id);
        $updateSlider->slider_name = $request->input('slider_name');
        $updateSlider->slider_description = $request->input('slider_description');
        if($request->hasfile('slider_image'))
        {
            $fileupdate = $request->file('slider_image');
            $extensionupdate = $fileupdate->getClientOriginalExtension();
            $filenameupdate = time().'_icon.'.$extensionupdate;
            $fileupdate->move('uploads/aminitie/', $filenameupdate);
            $updateSlider->icon = $filenameupdate;
        }
        $updateSlider->update();
        return redirect()->route('slider.show.page')->with('success','Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Slider::find($id)->delete();
        return redirect()->route('slider.show.page')->with('success','Slider Deleted Successfully');
    }
}
