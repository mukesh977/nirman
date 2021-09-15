<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\FeaturesAboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = FeaturesAboutUs::asc()->get() ;
        return view('backend.features.index', compact('features'));
    }

    public function create()
    {
        return view('backend.features.create');
    }

    public function store(Request $request)
    {
        // // dd($request->all());
        // $request->validate([
        //     'features_title' => 'required',
        //     'features_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        
        // $input = $request->all();
        // if( $input['order'] == null ) 
        // {
        //     $order = FeaturesAboutUs::max('order');
        //     $input['order'] = $order + 1;
        // }
        // if( $request->hasFile('features_image') )
		// {
        //     $filepath = $request->file('features_image')->store('public/features'); 
        //     $input['features_image'] = $filepath;
        // }
        // FeaturesAboutUs::create( $input );
        // return  redirect()->back()->with('success_msg', 'Data Stored Successfully');
    }

    public function edit($id)
    {
        $feature = FeaturesAboutUs::findOrFail($id);
        return view('backend.features.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $request->validate([
        //     'features_title' => 'required',
        //     'features_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        // $input = $request->all();
        // $feature = FeaturesAboutUs::findOrFail($id);
        // if( $input['order'] == null ) 
        // {
        //     $order = FeaturesAboutUs::max('order');
        //     $input['order'] = $order + 1;
        // }

        // if( $request->hasFile('features_image') )
		// {
        //     Storage::delete($feature->features_image);
		// 	$filepath = $request->file('features_image')->store('public/features'); 
        //     $input['features_image'] = $filepath;
        // }
        // $feature->update($input);
        // return redirect()->back()->with('success_msg', 'Data Updated Successfully');

    }

    public function destroy($id)
    {
        $feature = FeaturesAboutUs::findOrFail($id);
        Storage::delete($feature->features_image);
        $feature->delete();
        return redirect()->back()->with('success_msg', 'Data Deleted Successfully');
    }    
}
