<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Layout;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class LayoutController extends Controller
{
    protected $index_view = 'backend.layout-category.index';
    protected $edit_view = 'backend.layout-category.edit';

    public function index()
    {
        $layouts_tree = Layout::whereNull('layout_id')
            ->asc()
            ->with('one_level_child')
            ->get();
        return view($this->index_view, compact('layouts_tree'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:191',
            'order' => 'nullable|integer|max:1000'
        ]);


        $input = $request->all();
        if ($request->has('status')) {
            $input['status '] = 1;
        }
        if (empty($input['order'])) {
            $order = Layout::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }

        Layout::create($input);
        return redirect()->back()->with('success_msg', 'New Layout Category Added.');
    }


    public function edit(Layout $layout)
    {
        $layouts_tree = Layout::whereNull('layout_id')->get();
        // dd($layouts_tree);

        return view($this->edit_view, compact('layout', 'layouts_tree'));
    }

    public function update(Request $request, Layout $layout)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:191',
            'order' => 'nullable|integer|max:1000'
        ]);


        $input = $request->all();
        if ($request->has('status')) {
            $input['status'] = 1;
        }else{
            $input['status'] = 0;
        }
        if (empty($input['order'])) {
            $order = Layout::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }
        $layout->update($input);
        return redirect()->back()->with('success_msg', 'Layout Updated.');
    }

    public function destroy(Layout $layout)
    {
        $layout->delete();
        return redirect()->back()->with('success_msg', 'Category Deleted.');
    }
}
