<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Model\ProductCategory;

class NavbarComposer
{
    public function compose(View $view)
    {
        // getting only 9 relationship i.e product from product category.
        $product_category = ProductCategory::with('product')
            ->active()
            ->asc()
            ->get()
            ->map(function ($product_category) {
                $product_category->product = $product_category->product->take(8);
                return $product_category;
            });
        // dd($product_category);
        $view->with('product_category', $product_category);
    }
}
