<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductCategoryController extends Controller
{
    protected $index_view = 'backend.product-category.index';
    protected $edit_view = 'backend.product-category.edit';

    public function index()
    {
        $categories = ProductCategory::asc()->get();

        return view($this->index_view, compact(
            'categories'
        ));
    }    



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'order' => 'nullable|integer|max:1000',
        ]);

        $input = $request->all();

        if( $request->has('status') && $request->status == 1 )
        {
            $input['status'] = 1;
        }
        if( $request->has('attribute_navbar') && $request->attribute_navbar == 1 )
        {
            $input['attribute_navbar'] = 1;
        }
        if( empty($input['order']))
        {
            $order = ProductCategory::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }
        
        $my_unique_slug = $this->create_unique_slug($request->name);
        $input['slug'] = $my_unique_slug;
        
        // dd($my_unique_slug);
        ProductCategory::create($input);

        return redirect()->route('admin.product-category.index')->with('success_msg', 'Category created successfully.');
    }
    


    public function edit(ProductCategory $productCategory)
    {
        return view($this->edit_view, compact('productCategory'));
    }



    public function update(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'order' => 'nullable|integer|max:1000',
        ]);

        $input = $request->all();

        if( $request->has('status') && $request->status == 1 )
        {
            $input['status'] = 1;
        }else{
            $input['status'] = 0;            
        }
        if( $request->has('attribute_navbar') && $request->attribute_navbar == 1 )
        {
            $input['attribute_navbar'] = 1;
        }else  {
            $input['attribute_navbar'] = 0;
        }
        if( empty($input['order']))
        {
            $order = ProductCategory::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }
        
        // change slug only if name is changes
        if($productCategory->name != $request->name)
        {
            $my_unique_slug = $this->create_unique_slug($request->name);
            $input['slug'] = $my_unique_slug;
        }
        
        // dd($my_unique_slug);
        $productCategory->update($input);

        return redirect()->route('admin.product-category.index')->with('success_msg', 'Category updated successfully.');
    }



    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->back()->with('success_msg', 'Category Deleted Successfully');
    }



    public function create_unique_slug($name, $id = 0)
    {
        $slug = Str::slug($name, '-');

        $all_slugs = $this->get_all_slugs($slug, $id);

        if (!$all_slugs->contains('slug', $slug)) {
            return $slug;
        }

        $i = 1;
        $is_contain = true;
        do {
            $new_slug = $slug . '-' . $i;
            if (!$all_slugs->contains('slug', $new_slug)) {
                $is_contain = false;
                return $new_slug;
            }
            $i++;
        } while ($is_contain);
    }


    public function get_all_slugs($slug, $id = 0)
    {
        return ProductCategory::select('slug')
            ->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
}
