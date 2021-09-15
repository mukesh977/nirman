<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use Cart;
use App\Events\ProductOrdered;


class CheckoutController extends Controller
{
    protected $default_status = 'on hold';
    protected $index_view = 'customer.checkout';
    // protected $create_view = 'frontend.';
    // protected $edit_view = '';



    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view($this->index_view);
    }



    public function create()
    {
        //
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);



        $input = $request->all();

        // storing product, quantity and price in description tuple.
        $description_arr = array();
        if (Cart::count() < 1 ) {
            return redirect()->back()->with('error_msg', 'Cart is empty');
        }

        foreach (Cart::content() as $item) {
            array_push($description_arr, array(
                'id' => $item->id,
                'slug' => $item->model->slug,
                'sku' => $item->model->sku,
                'product' => $item->name,
                'price' => $item->price,
                'quantity' => $item->qty,
            ));
        }
        $input['status'] = $this->default_status;
        $input['total_price'] = Cart::total();
        $input['description'] = json_encode($description_arr);
        $input['user_id'] = auth()->user()->id;
        // dd($input);
        $order = Order::create($input);        

        //sending order to event class
        event(new ProductOrdered($order));

        Cart::destroy();



        return redirect()->route('cart.index')->with('success_msg', 'Thank You for purchasing! We will catch you soon.');
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
        //
    }
}
