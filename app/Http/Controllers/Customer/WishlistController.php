<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Model\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    protected $index_view = 'customer.wishlist';



    public function index()
    {
        $wishlists = Wishlist::with('product')
        ->where('user_id', Auth::user()->id)
        ->get();
        // dd($wishlists);


        return view($this->index_view, compact('wishlists'));
    }




    public function create()
    {
        //
    }




    public function store(Request $request)
    {
        if ($request->ajax()) {
            $user_id = Auth::user()->id;
            $wishlist = Wishlist::where('product_id', $request->product_id)
                ->where('user_id', $user_id)
                ->first();

            if (isset($wishlist->user_id) && isset($wishlist->product_id)) {
                $wishlist->delete();


                return response("removed", 200);
            } else {
                $input = $request->all();
                $input['user_id'] = $user_id;
                Wishlist::create($input);


                return response("added", 200);
            }

            return response("bad", 200);
        }
    }




    public function show(Wishlist $wishlist)
    {
        //
    }




    public function edit(Wishlist $wishlist)
    {
        //
    }




    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }




    public function destroy(Wishlist $wishlist)
    {
        // dd($wishlist);
        $wishlist->delete();
        return redirect()->back()->with('success_msg', 'Item Removed From Wishlist!');
    }


    public function bulkdel(Request $request)
    {
        $user_id = Auth::user()->id;
        
        Wishlist::where('user_id', $user_id)->delete();

        

        return redirect()->back()->with('success_msg', 'All Items Removed From Wishlist!');
    }
}
