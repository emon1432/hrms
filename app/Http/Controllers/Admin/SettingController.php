<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::firstOrFail();
        return view('backend.pages.admin.setting.index', compact('setting'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);   
        
        $setting = Setting::first();
        $validate = validator($request->all(), [
            'site_logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|max:2048',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->errors()->first());
            return back();
        }
        if ($request->hasFile('site_logo')) {
            $request->merge([
                'logo' => imageUpdateManager($request->site_logo, slugify($request->site_name), 'settings', 200, 200, $setting->logo),
            ]);
        }

        if ($request->hasFile('favicon')) {
            $request->merge([
                'favicon' => imageUpdateManager($request->favicon, slugify($request->site_name), 'settings', 200, 200, $setting->favicon),
            ]);
        }
                
        $setting->update($request->all());
        // Setting::find($id)->update($request->all());
        notify()->success('Setting updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
