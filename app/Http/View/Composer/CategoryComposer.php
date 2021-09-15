<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Model\ProductCategory;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories_com = ProductCategory::active()
            ->asc()
            ->get();
           
        // dd($categories_com);
        $view->with('categories_com', $categories_com);
    }
}
