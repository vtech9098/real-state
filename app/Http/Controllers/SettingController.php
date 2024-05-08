<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use GuzzleHttp\Psr7\Header;


class SettingController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        $settings = Setting::first();

        return view('admin.setting.edit', compact("settings"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function header_logo_update(Request $request)
    {
        $request->validate([
            'header_logo' => 'required'
        ]);
        $input = $request->all();
        $file = $request->file('header_logo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(base_path('public/uploads/setting/'), $filename);
        $input['header_logo'] = $filename;
        unset($input["_token"]);

        Setting::where("id", 1)->update($input);
        return redirect()->route('admin.setting.edit')->with('success', 'setting created successfully.');
    }

    public function footer_logo(Request $request)
    {
        $request->validate([
            'footer_logo' => 'required'
        ]);
        $input = $request->all();
        $file = $request->file('footer_logo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(base_path('public/uploads/setting'), $filename);
        $input['footer_logo'] = $filename;
        unset($input["_token"]);

        Setting::where("id", 1)->update($input);
        return redirect()->route('admin.setting.edit')->with('success', 'setting created successfully.');
    }
    public function favicon_update(Request $request)

    {
        $request->validate([
            'favicon' => 'required'
        ]);
        $input = $request->all();
        $file = $request->file('favicon');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(base_path('assets/upload/setting/favicon'), $filename);
        $input['favicon'] = $filename;
        unset($input["_token"]);

        Setting::where("id", 1)->update($input);
        return redirect()->route('admin.setting.edit')->with('success', 'setting created successfully.');
    }
    public function preloader_update(Request $request)
    {

        $request->validate([
            'enable_preloader' => 'required'
        ]);
        $input = $request->all();
        unset($input["_token"]);
        Setting::where("id", 1)->update($input);
        return redirect()->route("admin.setting.edit")->with("success", "Property created successfully");
    }
    public function setting_update(Request $request)
    {
        $request->validate([
            'copyright' => 'required',
            'about_us' => 'required',

        ]);
        $input = $request->all();
        unset($input["_token"]);
        Setting::where("id", 1)->update($input);
        return redirect()->route("admin.setting.edit")->with("success", "Property created successfully");
    }
    public function seo_update(Request $request)
    {

        $request->validate([
            'seo_title' => 'required',
            'seo_description' => 'required',
            'seo_keywords' => 'required',
        ]);
        $input = $request->all();
        $file = $request->file('seo_image');
        $fileName = date('YmdHi') . $file->getClientOriginalName();
        $file->move(base_path('public/uploads/setting'), $fileName);
        $input['seo_image'] = $fileName;
        unset($input["_token"]);

        Setting::where("id", 1)->update($input);
        return redirect()->route('admin.setting.edit')->with('success', 'setting created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
}
