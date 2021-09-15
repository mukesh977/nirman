<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Model\ProductTag;

class TagComposer
{
    public function compose(View $view)
    {
        $tags_com = ProductTag::asc()
            ->get();
           
        // dd($categories_com);
        $view->with('tags_com', $tags_com);
    }
}
