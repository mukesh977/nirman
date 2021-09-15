<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use File;


class MediaLibraryController extends Controller
{
    protected $index_view = 'backend.media-library.index';
    protected $create_view = 'backend.media-library.create';

    public function index()
    {
        $images = File::allFiles(public_path('images'));

        return View($this->index_view)->with(array('images' => $images));
    }

    public function create()
    {
        return view($this->create_view);
    }

    public function store(Request $request)
    {
        // dd($request->all());


        try {
            if ($request->hasFile('image')) {
                $images = $request->file('image');                
                foreach ($images as $file) {
                    $imageName = $file->getClientOriginalName();
                    $uniqueName = time() . '-' . $imageName;
                    $file->move(public_path() . '/images/', $uniqueName);
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error_msg', 'Failed to upload images.');
        }


        return redirect()->route('backend.media-library.index')->with('success_msg', ' Image Uploaded');
    }

    public function bulk_destroy(Request $request)
    {
        try{
            $images = $request->images;
            foreach ($images as $image) {
                File::delete($image);
            }
        }catch(\Exception $e){
            return redirect()->back()->with('errror_msg', 'Failed to Delete!');            
        }


        return redirect()->back()->with('success_msg', 'Deleted Successfully');

    }
}
