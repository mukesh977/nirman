<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\Layout;
use App\Model\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Yajra\DataTables\DataTables;



class ProductController extends Controller
{

    protected $index_view = 'backend.product.index';
    protected $create_view = 'backend.product.create';
    protected $edit_view = 'backend.product.edit';



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::asc()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<a  class="btn btn-primary btn-sm" href="' . route('admin.product.edit', $data->id) . '"><i class="fa fa-edit"></i></a>';
                    $button .= '<button class="btn btn-danger btn-sm mx-1" id="' . $data->id . '" data-toggle="modal"
                    data-target="#deleteProductModal" onclick="deleteData(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
                    return $button;
                })
                ->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $label = '<span class="badge badge-success">Active</span>';
                    } else {
                        $label = '<span class="badge badge-danger">Inactive</span>';
                    }
                    return $label;
                })
                ->rawColumns(['action', 'status'])
                ->addIndexColumn()
                ->make(true);
        }
        return view($this->index_view);
    }

    public function create()
    {
        $categories = ProductCategory::asc()->get();

        $layouts_tree = Layout::whereNull('layout_id')
            ->asc()
            ->with('one_level_child')
            ->get();

        $tags = ProductTag::asc()->get();

        $images = File::allFiles(public_path('images'));

        return view($this->create_view, compact('categories', 'layouts_tree', 'tags', 'images'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'sku' => 'nullable|unique:products,sku',
            'title' => 'required|string|max:191',
            'regular_price' => 'required|int|min:1',
            'sale_price' => 'nullable|int',
            'order' => 'nullable|integer|max:10000',
            'stock' => 'nullable|integer|max:10000',
        ]);



        $input = $request->all();

        // generate unique slug
        $my_unique_slug = $this->create_unique_slug($request->title);
        $input['slug'] = $my_unique_slug;

        if ($request->has('status') && $request->status == 1) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        if (empty($input['order'])) {
            $order = Product::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }

        if ($request->hasFile('featured_image')) {
            $images = $request->file('featured_image');
            $imageName = $images->getClientOriginalName();
            $uniqueName = time() . '-' . $imageName;
            $images->move(public_path() . '/images/', $uniqueName);
            $input['featured_image'] = $uniqueName;
        }

        $product_image_from_local_array = array();
        if ($request->hasfile('product_image_from_local')) {
            foreach ($request->file('product_image_from_local') as $image) {
                $imageName = $image->getClientOriginalName();
                $uniqueName = time() . '-' . $imageName;
                $image->move(public_path() . '/images/', $uniqueName);
                $data[] = $uniqueName;
                array_push($product_image_from_local_array, $uniqueName);
            }
        }
        $product_image_from_col = $request->product_image_from_col;
        $product_image = array_merge((array)$product_image_from_local_array, (array)$product_image_from_col);
        $input['product_image'] = json_encode($product_image);

        $product = Product::create($input);

        // attach product with layouts
        $layouts = $request->layouts;
        $product->layouts()->attach($layouts);

        // attach product with tag
        $tags = $request->tags;
        $product->tags()->attach($tags);


        return redirect()->back()->with('success_msg', 'Product Added.');
    }

    public function edit(Product $product)
    {
        $product->load('layouts', 'tags');
        // dd(json_decode($product->product_image));

        $categories = ProductCategory::asc()->get();

        $layouts_tree = Layout::whereNull('layout_id')
            ->asc()
            ->with('one_level_child')
            ->get();

        $tags = ProductTag::asc()->get();

        $images = File::allFiles(public_path('images'));

        return view($this->edit_view, compact('categories', 'layouts_tree', 'tags', 'images', 'product'));
    }

    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:191',
            'sku' => 'nullable|unique:products,sku,'.$product->id,
            'regular_price' => 'required|int|min:1',
            'sale_price' => 'nullable|int',
            'order' => 'nullable|integer|max:10000',
            'stock' => 'nullable|integer|max:10000',
        ]);



        $input = $request->all();

        // generate unique slug
        $my_unique_slug = $this->create_unique_slug($request->title);
        $input['slug'] = $my_unique_slug;

        if ($request->has('status') && $request->status == 1) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }

        if (empty($input['order'])) {
            $order = Product::max('order');
            $new_order = $order + 1;
            $input['order'] = $new_order;
        }

        if ($request->hasFile('featured_image')) {
            $images = $request->file('featured_image');
            $imageName = $images->getClientOriginalName();
            $uniqueName = time() . '-' . $imageName;
            $images->move(public_path() . '/images/', $uniqueName);
            $input['featured_image'] = $uniqueName;
        }

        $product_image_from_local_array = array();
        if ($request->hasfile('product_image_from_local')) {
            foreach ($request->file('product_image_from_local') as $image) {
                $imageName = $image->getClientOriginalName();
                $uniqueName = time() . '-' . $imageName;
                $image->move(public_path() . '/images/', $uniqueName);
                $data[] = $uniqueName;
                array_push($product_image_from_local_array, $uniqueName);
            }
        }
        $product_image_from_col = $request->product_image_from_col;
        $product_image = array_merge((array)$product_image_from_local_array, (array)$product_image_from_col);
        $input['product_image'] = json_encode($product_image);

        $product->update($input);

        // attach product with layouts
        $layouts = $request->layouts;
        $product->layouts()->sync($layouts);

        // attach product with tag
        $tags = $request->tags;
        $product->tags()->sync($tags);


        return redirect()->route('admin.product.index')->with('success_msg', 'Product Updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success_msg', 'Product Deleted.');
    }

    public function create_unique_slug($title, $id = 0)
    {
        $slug = Str::slug($title, '-');

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
        return Product::select('slug')
            ->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
