<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;
use Cart;





class CartController extends Controller
{
    protected $cart_view = 'frontend.cart';





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->cart_view);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id' => 'required|exists:products,id',
            'title' => 'required|string',
            'sale_price' => 'required|integer',
        ]);



        if ($request->ajax()) {
            $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
                return $cartItem->id === $request->id;
            });

            $product = Product::find($request->id);
            $stock = $product->stock;
            if ($stock < 1) {
                return response('outOfStock', 200);
            }

            if ($duplicates->isNotEmpty()) {
                return response('exist', 200);
            }

            Cart::add($request->id, $request->title, 1, $request->sale_price, 1)
                ->associate('App\Model\Product');;

            return response('added', 200);
        }

        $product = Product::find($request->id);
        $stock = $product->stock;
        if ($stock < 1) {
            return redirect()->back()->with('error_msg', 'Item Out Of Stock');
        }

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('warning_msg', 'Item is already in your cart!');
        }


        Cart::add($request->id, $request->title, 1, $request->sale_price, 1)
            ->associate('App\Model\Product');;



        return redirect()->back()->with('success_msg', 'Item Added To Cart!');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rowId' => 'required',
            'quantity' => 'required|numeric',
        ]);
        // dd($request->all());


        $product = Product::find($id);
        $product_qty = $product->stock;

        if ($request->quantity > $product->stock) {
            return redirect()->back()->with('error_msg', "We only have $product_qty item(s) in stock.");
        }

        Cart::update($request->rowId, $request->quantity);



        return redirect()->back()->with('success_msg', 'Cart Updated!');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);



        return back()->with('success_msg', 'Item has been removed!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function flush()
    {
        Cart::destroy();



        return back()->with('success_msg', 'All Item has been removed');
    }
}
