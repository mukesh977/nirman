<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductCategory;
use App\Model\ProductTag;
use Illuminate\Http\Request;
use Response;


/**
 * this controller is liable for search and filter.
 * 
 */
class SearchController extends Controller
{
    public function search(Request $request)
    {
        //    dd($request->search);
        $keyword = $request->search;

        $products = Product::where('title', 'like', '%' . $keyword . '%')->get();

        return view('frontend.search', compact('products', 'keyword'));
    }


    public function filter(Request $request)
    {
        $keyword = $request->keyword;
        $category = $request->category;
        $range = $request->range;
        $order = $request->order;

        $products = Product::select('title', 'slug', 'regular_price', 'featured_image')
        ->where('status', 1);

        if ($keyword) {
            $products = $products->where('title','like', "%$keyword%");
        }

        if ($category) {
            $products = $products->whereHas('product_category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        if ($range) {
            $products = $products->where('regular_price', '<', $range);
        }

        if ($order) {
            if ($order == 'latest') {
                $products = $products->latest();
            }elseif($order == 'price_asc'){
                $products = $products->orderBy('regular_price', 'asc');
            }elseif($order == 'price_desc'){
                $products = $products->orderBy('regular_price', 'desc');
            }else{
                $products;
            }
        }
        return Response::json(json_decode($products->get()), 200);

    }
    

    public function show($category = null, $filter = null)
    {
        // dd($category);
        $product_category = [];

        if ($category) {
            $product_category = ProductCategory::where('slug', $category)->first();
            if ($filter != null) {
                if ($filter == 'latest') {
                    $products = $product_category->product()->orderBy('created_at', 'desc')->paginate(16);
                } elseif ($filter == 'price_asc') {
                    $products = $product_category->product()->orderBy('regular_price', 'asc')->asc()->paginate(16);
                } elseif ($filter == 'price_desc') {
                    $products = $product_category->product()->orderBy('regular_price', 'desc')->asc()->paginate(16);
                } else {
                    // default products
                    $products = $product_category->product()->paginate(16);
                }
            } else {
                $products = $product_category->product()->paginate(16);
            }
        }

        return view('frontend.category', compact('product_category', 'products', 'category', 'filter'));
    }

    public function tag($tag = null, $filter = null)
    {
        // dd($category);
        $product_tag = [];

        if ($tag) {
            $product_tag = ProductTag::where('tag', $tag)->first();
            if ($filter != null) {
                if ($filter == 'latest') {
                    $products = $product_tag->products()->orderBy('created_at', 'desc')->paginate(16);
                } elseif ($filter == 'price_asc') {
                    $products = $product_tag->products()->orderBy('regular_price', 'asc')->paginate(16);
                } elseif ($filter == 'price_desc') {
                    $products = $product_tag->products()->orderBy('regular_price', 'desc')->paginate(16);
                } else {
                    // show default products.
                    $products = $product_tag->products()->paginate(16);
                }
            } else {
                $products = $product_tag->products()->paginate(16);
            }
        }

        return view('frontend.tag', compact('product_tag', 'products', 'tag', 'filter'));
    }    
}
