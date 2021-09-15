<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\HomepagePictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepagePictureController extends Controller
{
    public function index()
    {
        try{
            $homepage_picture = HomepagePictures::firstOrFail();            
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error_msg', 'Oops! Data not found.');
        }
        return view('backend.homepagePictures.index', compact('homepage_picture'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'service_image' => 'nullable|image',
            'banner_image' => 'nullable|image',
        ]);    
        // dd($request->all());
        $input = $request->all();
        $homepage_picture = HomepagePictures::firstOrFail();            
        if($request->hasFile('service_image'))
        {
            Storage::delete($homepage_picture->service_image);
            $path = $request->file('service_image')->store('public/homepage');            
            $input['service_image'] = $path;
        }
        if($request->hasFile('banner_image'))
        {
            Storage::delete($homepage_picture->banner_image);
            $path = $request->file('banner_image')->store('public/homepage');            
            $input['banner_image'] = $path;
        }
        $homepage_picture->update($input) ;
        return redirect()->back()->with('success_msg', 'Data Updated Successfully.');
    }
}
