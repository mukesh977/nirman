<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
	{
		try {
			$setting = Setting::firstOrFail();
		} catch (\Exception $e) {
			return redirect('home')->with('error_msg', 'OOps! Setting Table is Empty.');			
		}
		return view('backend.setting.index', compact('setting'));
	}

	public function update(Request $request)
	{
		try {
			$setting = Setting::firstOrFail();
		} catch (\Exception $e) {
			return redirect()->back()->with('error_msg', 'Table does not exists!');
		}

		$input = $request->all();
		// dd($input);
		if($request->hasFile('institution_logo')){
			Storage::delete($setting->institution_logo);
			$path = $request->file('institution_logo')->store('public/logo');            
            $input['institution_logo'] = $path;
		}
		
		if($request->hasFile('cover_photo')){
			Storage::delete($setting->cover_photo);
			$path = $request->file('cover_photo')->store('public/common_image');            
            $input['cover_photo'] = $path;
		}
		
		$setting->update($input);
		
		return redirect()->back()->with('success_msg', 'Information Saved Successfully');
	}
}
