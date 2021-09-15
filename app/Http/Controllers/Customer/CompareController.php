<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;


class CompareController extends Controller
{
    protected $index_view = 'customer.compare';



    public function index()
    {
        $product_ids = session()->get('product', []);

        // dd($product_ids);
        $products = Product::whereIn('id', $product_ids)
            ->get();



        return view($this->index_view, compact('products'));
    }




    public function store($id)
    {
        $session_data = session()->get('product', []);
        

        if (in_array($id, $session_data)) {

            return redirect()->back()->with('error_msg', 'Item  exists!');
        }

        if (count($session_data) > 2) {
            return redirect()->back()->with('error_msg', 'Only 3 items are allowed!');
        }

        session()->push('product', $id);



        return redirect()->back()->with('success_msg', 'Item Added to Compare');
    }




    public function show($id)
    {
        //
    }




    public function edit($id)
    {
        //
    }




    public function update(Request $request, $id)
    {
        //
    }




    public function destroy($id)
    {
        // dd($id);
        $products = session()->pull('product');

        $key = array_search($id, $products);

        if( $key !== false  ){
            unset($products[$key]);
        }

        session()->put('product', $products);



        return redirect()->back()->with('success_msg', 'Item removed from compare list.');        
    }


    public function forget(Request $request)
    {
        session()->forget('product');



        return redirect()->back()->with('success_msg', 'List Cleared!'); 
    }
}
