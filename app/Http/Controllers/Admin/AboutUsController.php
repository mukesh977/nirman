<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
	{
        try {
            $aboutUs = AboutUs::firstOrFail();
            // dd($aboutUs);
        }   catch( \Exception $e )  {
            return redirect()->back()->with('error_msg', "OOps! About Us table deleted or lost. Contact developer");
        }
		return view('backend.aboutUs.index', compact('aboutUs'));
	}

	public function update(Request $request)
	{        
        $input = $request->all();
        // dd($input);
        $aboutUs = AboutUs::firstOrFail();
        if($request->hasFile('cover_image'))
		{
            Storage::delete($aboutUs->cover_image);
            $path = $request->file('cover_image')->store('public/AboutUs'); 
            $input['cover_image'] = $path;
        }
        if($request->hasFile('first_featured_image'))
		{
            Storage::delete($aboutUs->first_featured_image);
            $path = $request->file('first_featured_image')->store('public/AboutUs'); 
            $input['first_featured_image'] = $path;
        }
        if($request->hasFile('banner_image'))
		{
            Storage::delete($aboutUs->banner_image);
            $path = $request->file('banner_image')->store('public/AboutUs'); 
            $input['banner_image'] = $path;
        }
        if($request->hasFile('second_featured_image'))
		{
            Storage::delete($aboutUs->second_featured_image);
            $path = $request->file('second_featured_image')->store('public/AboutUs'); 
            $input['second_featured_image'] = $path;
        }
        if($request->hasFile('third_featured_image'))
		{
            Storage::delete($aboutUs->third_featured_image);
            $path = $request->file('third_featured_image')->store('public/AboutUs'); 
            $input['third_featured_image'] = $path;
        }
        
        $aboutUs->update($input);
        return redirect()->back()->with('success_msg', 'Data Updated Successfully');
	}
}
