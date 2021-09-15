<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerboardController extends Controller
{
    protected $dashboard_view = 'customer.dashboard';



    public function index()
    {
        return view($this->dashboard_view);
    }
}
