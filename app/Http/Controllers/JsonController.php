<?php

namespace App\Http\Controllers;

use App\Model\ProductCategory;
use Illuminate\Http\Request;
use Response;

class JsonController extends Controller
{
    public function get_categories(Request $reqeust)
    {
        if ($reqeust->ajax()) {
            $categories = ProductCategory::asc()->get();
            $data = json_decode($categories);

            return Response::json($data, 200);
        }
    }


    
}
