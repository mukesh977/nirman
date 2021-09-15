<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ProductTag;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    protected $index_view = 'backend.product-tag.index';
    protected $edit_view = 'backend.product-tag.edit';

    public function index()
    {
        $tags = ProductTag::asc()->get();
        return view($this->index_view, compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag' => 'required|unique:product_tags,tag',
            'order' => 'nullable|integer|max:1000'
        ]);

        $input = $request->all();
        if (empty($input['order'])) {
            $order = ProductTag::max('order');
            $input['order'] = $order + 1;
        }
        
        ProductTag::create($input);

        return redirect()->back()->with('success_msg', 'Tag Added Successfully');
    }

    public function edit(ProductTag $productTag)
    {
        return view($this->edit_view, compact('productTag'));
    }

    public function update(Request $request, ProductTag $productTag)
    {
        $request->validate([
            'tag' => 'required|unique:product_tags,tag,'.$productTag->id,
            'order' => 'nullable|integer|max:1000'
        ]);

        $input = $request->all();
        if (empty($input['order'])) {
            $order = ProductTag::max('order');
            $input['order'] = $order + 1;
        }
        
        $productTag->update($input);

        return redirect()->back()->with('success_msg', 'Tag Added Successfully');
    }

    public function destroy(ProductTag $productTag)
    {
        $productTag->delete();
        return redirect()->back()->with('success_msg', 'Tag Added Successfully');
    }
}
