<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'asc')->get() ;
        return view('backend.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.pages.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'page_title' => 'required|string|max:191',
            'page_url' => 'required|string|max:191|unique:pages,page_url',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        
        $input = $request->all();
        if( $request->hasFile('featured_image') )
		{
            $filepath = $request->file('featured_image')->store('public/pages'); 
            $input['featured_image'] = $filepath;
        }
        Page::create( $input );
        return  redirect()->back()->with('success_msg', 'Data Stored Successfully');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('backend.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'page_title' => 'required|string|max:191',
            'page_url' => 'required|string|max:191|unique:pages,page_url,'.$id,
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input = $request->all();
        $page = Page::findOrFail($id);
        if( $request->hasFile('featured_image') )
		{
            Storage::delete($page->featured_image);
			$filepath = $request->file('featured_image')->store('public/pages'); 
            $input['featured_image'] = $filepath;
        }
        $page->update($input);
        return redirect()->back()->with('success_msg', 'Data Updated Successfully');

    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        Storage::delete($page->featured_image);
        $page->delete();
        return redirect()->back()->with('success_msg', 'Data Deleted Successfully');
    }    
}
