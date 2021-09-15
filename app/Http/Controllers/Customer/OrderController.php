<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $index_view = 'customer.order';
    protected $orderview = 'customer.orderview';
    
    
    public function index()
    {
        $user_id = Auth::user()->id;

        $orders = Order::where('user_id', $user_id)
        ->latest()
        ->paginate(5);



        return view($this->index_view, compact('orders'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $order = Order::findorFail($id);
        $items_inside_order = json_decode($order->description);
        // dd($order);
        // dd($items_inside_order);
        


        return view($this->orderview, compact(
            'order',
            'items_inside_order'
        ));
    }

    public function edit($id)
    {
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);


        $status = $request->status;
        if($status != "cancelled"){
            return redirect()->back()->with('error_msg', 'You can only cancel order');
        }

        $order = Order::findOrFail($id);
        $order->status = $status;
        $order->save();


        return redirect()->route('customer.order.index')->with('success_msg', 'Cancelled Successfully!');
    }

    public function destroy($id)
    {
        //
    }
}
