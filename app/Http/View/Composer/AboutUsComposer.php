<?php
namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Model\AboutUs;

class AboutUsComposer
{
    public function compose(View $view)
    {
        $about_us = AboutUs::first();
        $view->with('about_us',$about_us);
    }
}
